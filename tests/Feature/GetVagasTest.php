<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetVagasTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this
            ->withSession([
                'search' => 'Auxiliar Administrativo'
            ])
            ->post(route('vagas.get') , [
                'areas' => [100, 1500 , 10],
                'escolaridades' => [20, 200 , 2],
                'experiencias' => [2 , 10, 11],
                'cidades' => ['Panambi' , 'Rio de Janeiro'],
            ]);

        $this->assertEquals(97 , $response->json()['vagas'][0]['id']);
        $this->assertEquals('Auxiliar Administrativo' , $response->json()['vagas'][0]['name']);
    }
}
