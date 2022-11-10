<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SitioTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_contactForm()
    {
        $response = $this->get('/contactForm');

        $response->assertStatus(200);
    }

    public function test_contactForm_conCodigo()
    {
        $response = $this->get('/contactForm/1234');
        $response->assertStatus(200);
    }
}
