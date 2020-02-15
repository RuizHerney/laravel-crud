<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use SectionSeeder;
use StateSeeder;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function a_user_can_create_product()
    {
        $this->withoutExceptionHandling();

        $this->seed([
            SectionSeeder::class,
            StateSeeder::class
        ]);

        $this->post(route('Product.store'), [
            'name'              => 'camisa',
            'price'             => 200,
            'country_origin'    => 'Colombia',
            'section_id'           => 1
        ]);

        $this->assertDatabaseHas('products', [
            'name'              => 'camisa',
            'price'             => 200,
            'country_origin'    => 'Colombia',
            'section_id'           => 1
        ]);
    }
}
