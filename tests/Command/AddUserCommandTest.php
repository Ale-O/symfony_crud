<?php

namespace App\Tests\Command;

use App\Command\AddUserCommand;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Tester\CommandTester;

class AddUserCommandTest extends KernelTestCase
{
    private $userData = [
        'username' => 'chuck_norris',
        'password' => 'foobar',
        'email' => 'chuck@norris.com',
        'full-name' => 'Chuck Norris',
    ];

    protected function setUp(): void
    {
        exec('stty 2>&1', $output, $exitcode);
        $isSttySupported = 0 === $exitcode;

        if ('Windows' === PHP_OS_FAMILY || !$isSttySupported) {
            $this->markTestSkipped('`stty` is required to test this command.');
        }
    }

    /**
     * @dataProvider isAdminDataProvider
     */
    public function testCreateUserNonInteractive(bool $isAdmin): void
    {
        $input = $this->userData;
        if ($isAdmin) {
            $input['--admin'] = 1;
        }
        $this->executeCommand($input);

        $this->assertUserCreated($isAdmin);
    }

    /**
     * @dataProvider isAdminDataProvider
     */
    public function testCreateUserInteractive(bool $isAdmin): void
    {
        $this->executeCommand(
            $isAdmin ? ['--admin' => 1] : [],
            array_values($this->userData)
        );

        $this->assertUserCreated($isAdmin);
    }

    /**
     * This is used to execute the same test twice: first for normal users
     * (isAdmin = false) and then for admin users (isAdmin = true).
     */
    public function isAdminDataProvider(): ?\Generator
    {
        yield [false];
        yield [true];
    }

    private function assertUserCreated(bool $isAdmin): void
    {
        $container = self::$container;

        /** @var \App\Entity\User $user */
        $user = $container->get(UserRepository::class)->findOneByEmail($this->userData['email']);
        $this->assertNotNull($user);

        $this->assertSame($this->userData['full-name'], $user->getFullName());
        $this->assertSame($this->userData['username'], $user->getUsername());
        $this->assertTrue($container->get('security.password_encoder')->isPasswordValid($user, $this->userData['password']));
        $this->assertSame($isAdmin ? ['ROLE_ADMIN'] : ['ROLE_USER'], $user->getRoles());
    }

    /**
     * @param array $arguments All the arguments passed when executing the command
     * @param array $inputs    The (optional) answers given to the command when it asks for the value of the missing arguments
     */
    private function executeCommand(array $arguments, array $inputs = []): void
    {
        self::bootKernel();

        $command = self::$container->get(AddUserCommand::class);
        $command->setApplication(new Application(self::$kernel));

        $commandTester = new CommandTester($command);
        $commandTester->setInputs($inputs);
        $commandTester->execute($arguments);
    }
}
