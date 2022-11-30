<?php

namespace App\Tests\Controller\Admin;

use App\Repository\ElementRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

/**
 * Execute the application tests using this command (requires PHPUnit to be installed):.
 *
 *     $ cd your-symfony-project/
 *     $ ./vendor/bin/phpunit
 */
class CrudControllerTest extends WebTestCase
{
    /**
     * @dataProvider getUrlsForRegularUsers
     */
    public function testAccessDeniedForRegularUsers(string $httpMethod, string $url): void
    {
        $client = static::createClient([], [
            'PHP_AUTH_USER' => 'john_user',
            'PHP_AUTH_PW' => 'kitten',
        ]);

        $client->request($httpMethod, $url);

        $this->assertResponseStatusCodeSame(Response::HTTP_FORBIDDEN);
    }

    public function getUrlsForRegularUsers(): ?\Generator
    {
        yield ['GET', '/en/admin/element/'];
        yield ['GET', '/en/admin/element/1'];
        yield ['GET', '/en/admin/element/1/edit'];
        yield ['POST', '/en/admin/element/1/delete'];
    }

    public function testAdminBackendHomePage(): void
    {
        $client = static::createClient([], [
            'PHP_AUTH_USER' => 'jane_admin',
            'PHP_AUTH_PW' => 'kitten',
        ]);
        $client->request('GET', '/en/admin/element/');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorExists(
            'body#admin_element_index #main tbody tr',
            'The backend homepage displays all the available elements.'
        );
    }

    /**
     * This test changes the database contents by creating a new crud element. However,
     * thanks to the DAMADoctrineTestBundle and its PHPUnit listener, all changes
     * to the database are rolled back when this test completes. This means that
     * all the application tests begin with the same database contents.
     */
    public function testAdminNewElement(): void
    {
        $elementTitle = 'Crud Element Title '.mt_rand();
        $elementSummary = $this->generateRandomString(255);
        $elementContent = $this->generateRandomString(1024);

        $client = static::createClient([], [
            'PHP_AUTH_USER' => 'jane_admin',
            'PHP_AUTH_PW' => 'kitten',
        ]);
        $client->request('GET', '/en/admin/element/new');
        $client->submitForm('Create element', [
            'element[title]' => $elementTitle,
            'element[summary]' => $elementSummary,
            'element[content]' => $elementContent,
        ]);

        $this->assertResponseRedirects('/en/admin/element/', Response::HTTP_FOUND);

        /** @var \App\Entity\Element $element */
        $element = self::$container->get(ElementRepository::class)->findOneByTitle($elementTitle);
        $this->assertNotNull($element);
        $this->assertSame($elementSummary, $element->getSummary());
        $this->assertSame($elementContent, $element->getContent());
    }

    public function testAdminNewDuplicatedElement(): void
    {
        $elementTitle = 'Crud Element Title '.mt_rand();
        $elementSummary = $this->generateRandomString(255);
        $elementContent = $this->generateRandomString(1024);

        $client = static::createClient([], [
            'PHP_AUTH_USER' => 'jane_admin',
            'PHP_AUTH_PW' => 'kitten',
        ]);
        $crawler = $client->request('GET', '/en/admin/element/new');
        $form = $crawler->selectButton('Create element')->form([
            'element[title]' => $elementTitle,
            'element[summary]' => $elementSummary,
            'element[content]' => $elementContent,
        ]);
        $client->submit($form);

        // element titles must be unique, so trying to create the same element twice should result in an error
        $client->submit($form);

        $this->assertSelectorTextSame('form .form-group.has-error label', 'Title');
        $this->assertSelectorTextContains('form .form-group.has-error .help-block', 'This title was already used in another crud element, but they must be unique.');
    }

    public function testAdminShowElement(): void
    {
        $client = static::createClient([], [
            'PHP_AUTH_USER' => 'jane_admin',
            'PHP_AUTH_PW' => 'kitten',
        ]);
        $client->request('GET', '/en/admin/element/1');

        $this->assertResponseIsSuccessful();
    }

    /**
     * This test changes the database contents by editing a crud element. However,
     * thanks to the DAMADoctrineTestBundle and its PHPUnit listener, all changes
     * to the database are rolled back when this test completes. This means that
     * all the application tests begin with the same database contents.
     */
    public function testAdminEditElement(): void
    {
        $newCrudElementTitle = 'Crud Element Title '.mt_rand();

        $client = static::createClient([], [
            'PHP_AUTH_USER' => 'jane_admin',
            'PHP_AUTH_PW' => 'kitten',
        ]);
        $client->request('GET', '/en/admin/element/1/edit');
        $client->submitForm('Save changes', [
            'element[title]' => $newCrudElementTitle,
        ]);

        $this->assertResponseRedirects('/en/admin/element/1/edit', Response::HTTP_FOUND);

        /** @var \App\Entity\Element $element */
        $element = self::$container->get(ElementRepository::class)->find(1);
        $this->assertSame($newCrudElementTitle, $element->getTitle());
    }

    /**
     * This test changes the database contents by deleting a crud element. However,
     * thanks to the DAMADoctrineTestBundle and its PHPUnit listener, all changes
     * to the database are rolled back when this test completes. This means that
     * all the application tests begin with the same database contents.
     */
    public function testAdminDeleteElement(): void
    {
        $client = static::createClient([], [
            'PHP_AUTH_USER' => 'jane_admin',
            'PHP_AUTH_PW' => 'kitten',
        ]);
        $crawler = $client->request('GET', '/en/admin/element/1');
        $client->submit($crawler->filter('#delete-form')->form());

        $this->assertResponseRedirects('/en/admin/element/', Response::HTTP_FOUND);

        $element = self::$container->get(ElementRepository::class)->find(1);
        $this->assertNull($element);
    }

    private function generateRandomString(int $length): string
    {
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return mb_substr(str_shuffle(str_repeat($chars, ceil($length / mb_strlen($chars)))), 1, $length);
    }
}
