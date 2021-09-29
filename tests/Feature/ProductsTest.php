<?php

namespace Tests\Feature;

use Symfony\Component\HttpFoundation\Response;

class ProductsTest extends \Tests\TestCase
{
    /** @test*/

    public function it_gets_all_products(){
        $response = $this->get('/api/products');

        $response->assertJson(['data' => []]);
    }


    /** @test*/

    public function it_gets_a_product(){
        $response = $this->get('/api/products/1');
        $this->assertTrue($response->getStatusCode() == Response::HTTP_OK || $response->getStatusCode() == Response::HTTP_NOT_FOUND);
    }
}
