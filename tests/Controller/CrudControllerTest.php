<?php

namespace App\Tests\Controller;

use App\Pagination\Paginator;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CrudControllerTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/en/crud/');

        $this->assertResponseIsSuccessful();

        $this->assertCount(
            Paginator::PAGE_SIZE,
            $crawler->filter('article.element'),
            'The homepage displays the right number of elements.'
        );
    }

    public function testRss(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/en/crud/rss.xml');

        $this->assertResponseHeaderSame('Content-Type', 'text/xml; charset=UTF-8');

        $this->assertCount(
            Paginator::PAGE_SIZE,
            $crawler->filter('item'),
            'The xml file displays the right number of elements.'
        );
    }

    public function testNewComment(): void
    {
        $client = static::createClient([], [
            'PHP_AUTH_USER' => 'john_user',
            'PHP_AUTH_PW' => 'kitten',
        ]);
        $client->followRedirects();

        $crawler = $client->request('GET', '/en/crud/');
        $elementLink = $crawler->filter('article.element > h2 a')->link();

        $client->click($elementLink);
        $crawler = $client->submitForm('Publish comment', [
            'comment[content]' => 'Hi, Symfony!',
        ]);

        $newComment = $crawler->filter('.element-comment')->first()->filter('div > p')->text();

        $this->assertSame('Hi, Symfony!', $newComment);
    }

    public function testAjaxSearch(): void
    {
        $client = static::createClient();
        $client->xmlHttpRequest('GET', '/en/crud/search', ['q' => 'lorem']);

        $results = json_decode($client->getResponse()->getContent(), true);

        $this->assertResponseHeaderSame('Content-Type', 'application/json');
        $this->assertCount(1, $results);
        $this->assertSame('Lorem ipsum dolor sit amet consectetur adipiscing elit', $results[0]['title']);
        $this->assertSame('Jane Doe', $results[0]['author']);
    }
}
