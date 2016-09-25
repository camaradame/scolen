<?php

namespace Ecole\FrontBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EcolControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertContains('sénégalaises', $client->getResponse()->getContent());
    }

    public function testNumber(){
        $this->assertEquals(1, 1);
    }
}
