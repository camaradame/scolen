<?php

namespace Ecole\FrontBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EcoleControllerTest extends WebTestCase
{
    private $client = null;
    private $clientAdmin = null;
    private $em;

    public function setUp()
    {
        $this->client = self::createClient();
        $this->clientAdmin = self::createClient(array(), array(
            'PHP_AUTH_USER' => 'bobo',
            'PHP_AUTH_PW'   => 'bdiallo',
        ));

        static::$kernel = static::createKernel();
        static::$kernel->boot();
        $this->em = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');
    }

    /**
     * Test Les routes
     */
    public function testRoutes(){
        foreach ($this->providerUrls() as $url) {
            $this->client->request('GET', $url);
            $this->assertTrue($this->client->getResponse()->isSuccessful());
        };
    }

    public function testIndex()
    {
        $this->client->request('GET', '/');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());

        $this->assertContains('sénégalaises', $this->client->getResponse()->getContent());
    }

    private function providerUrls()
    {
        return array(
            '/',
            '/login',
            '/register/'
        );
    }

}
