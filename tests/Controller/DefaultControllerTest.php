<?php

namespace App\Tests\Controller;

use App\Entity\Element;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class DefaultControllerTest extends WebTestCase
{
    /**
     * @dataProvider getPublicUrls
     */
    public function testPublicUrls(string $url): void
    {
        $client = static::createClient();
        $client->request('GET', $url);

        $this->assertResponseIsSuccessful(sprintf('The %s public URL loads correctly.', $url));
    }

    public function testPublicCrudElement(): void
    {
        $client = static::createClient();
        $crudElement = $client->getContainer()->get('doctrine')->getRepository(Element::class)->find(1);
        $client->request('GET', sprintf('/en/crud/elements/%s', $crudElement->getSlug()));

        $this->assertResponseIsSuccessful();
    }

    /**
     * @dataProvider getSecureUrls
     */
    public function testSecureUrls(string $url): void
    {
        $client = static::createClient();
        $client->request('GET', $url);

        $this->assertResponseRedirects(
            'http://localhost/en/login',
            Response::HTTP_FOUND,
            sprintf('The %s secure URL redirects to the login form.', $url)
        );
    }

    public function getPublicUrls(): ?\Generator
    {
        yield ['/'];
        yield ['/en/crud/'];
        yield ['/en/login'];
    }

    public function getSecureUrls(): ?\Generator
    {
        yield ['/en/admin/element/'];
        yield ['/en/admin/element/new'];
        yield ['/en/admin/element/1'];
        yield ['/en/admin/element/1/edit'];
    }
}
