<?php

namespace App\DataFixtures;

use App\Entity\Element;
use App\Entity\Subelement;
use App\Entity\Tag;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use function Symfony\Component\String\u;

class AppFixtures extends Fixture
{
    private $passwordEncoder;
    private $slugger;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder, SluggerInterface $slugger)
    {
        $this->passwordEncoder = $passwordEncoder;
        $this->slugger = $slugger;
    }

    public function load(ObjectManager $manager): void
    {
        $this->loadUsers($manager);
        $this->loadTags($manager);
        $this->loadElements($manager);
    }

    private function loadUsers(ObjectManager $manager): void
    {
        foreach ($this->getUserData() as [$fullname, $username, $password, $email, $roles]) {
            $user = new User();
            $user->setFullName($fullname);
            $user->setUsername($username);
            $user->setPassword($this->passwordEncoder->encodePassword($user, $password));
            $user->setEmail($email);
            $user->setRoles($roles);

            $manager->persist($user);
            $this->addReference($username, $user);
        }

        $manager->flush();
    }

    private function loadTags(ObjectManager $manager): void
    {
        foreach ($this->getTagData() as $index => $name) {
            $tag = new Tag();
            $tag->setName($name);

            $manager->persist($tag);
            $this->addReference('tag-'.$name, $tag);
        }

        $manager->flush();
    }

    private function loadElements(ObjectManager $manager): void
    {
        foreach ($this->getElementData() as [$title, $slug, $summary, $content, $publishedAt, $author, $tags]) {
            $element = new Element();
            $element->setTitle($title);
            $element->setSlug($slug);
            $element->setSummary($summary);
            $element->setContent($content);
            $element->setPublishedAt($publishedAt);
            $element->setAuthor($author);
            $element->addTag(...$tags);

            foreach (range(1, 5) as $i) {
                $subelement = new Subelement();
                $subelement->setAuthor($this->getReference('user_test'));
                $subelement->setContent($this->getRandomText(random_int(255, 512)));
                $subelement->setPublishedAt(new \DateTime('now + '.$i.'seconds'));

                $element->addSubelement($subelement);
            }

            $manager->persist($element);
        }

        $manager->flush();
    }

    private function getUserData(): array
    {
        return [
            // $userData = [$fullname, $username, $password, $email, $roles];
            ['Admin Test', 'admin_test', 'admin1', 'admin_test@example.com', ['ROLE_ADMIN']],
            ['User Test', 'user_test', 'user_1', 'user_test@example.com', ['ROLE_USER']],
        ];
    }

    private function getTagData(): array
    {
        return [
            'test',
        ];
    }

    private function getElementData()
    {
        $elements = [];
        foreach ($this->getPhrases() as $i => $title) {
            // $elementData = [$title, $slug, $summary, $content, $publishedAt, $author, $tags, $subelements];
            $elements[] = [
                $title,
                $this->slugger->slug($title)->lower(),
                $this->getRandomText(),
                $this->getElementContent(),
                new \DateTime('now - '.$i.'days'),
                $this->getReference(['admin_test'][0 === $i ? 0 : random_int(0, 1)]),
                $this->getRandomTags(),
            ];
        }

        return $elements;
    }

    private function getPhrases(): array
    {
        return [
            'test sentence',
        ];
    }

    private function getRandomText(int $maxLength = 255): string
    {
        $phrases = $this->getPhrases();
        shuffle($phrases);

        do {
            $text = u('. ')->join($phrases)->append('.');
            array_pop($phrases);
        } while ($text->length() > $maxLength);

        return $text;
    }

    private function getElementContent(): string
    {
        return <<<'MARKDOWN'
Test paragraph.
MARKDOWN;
    }

    private function getRandomTags(): array
    {
        $tagNames = $this->getTagData();
        shuffle($tagNames);
        $selectedTags = \array_slice($tagNames, 0, random_int(2, 4));

        return array_map(function ($tagName) { return $this->getReference('tag-'.$tagName); }, $selectedTags);
    }
}
