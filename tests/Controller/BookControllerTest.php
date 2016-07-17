<?php
// tests/Controller/BookControllerTest.php
namespace Tests\TDDIntro\Controller;

class BookControllerTest extends WebTestCase
{
    protected $client;

    public function setUp()
    {
        parent::setUp();
        $this->client = $this->createClient();
    }

    public function testIndexAction()
    {
        $crawler = $this->client->request('GET', '/');

        $this->assertTrue($this->client->getResponse()->getStatusCode() === 200);


        $this->assertCount(2, $crawler->filter('.book'));
        $this->assertEquals('Clean Code', $crawler->filter('.name')->text());
        $this->assertEquals('Robert C. Martin', $crawler->filter('.author')->text());
        $this->assertEquals('Programming', $crawler->filter('.category')->text());        }
}
