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
     * @test
     */
    public function a_user_can_create_product()
    {
        $this->withoutExceptionHandling();

        $this->seed([
            SectionSeeder::class,
            StateSeeder::class
        ]);

        $response = $this->post(route('Product.store'), [
            'name'              => 'camisa',
            'price'             => 200,
            'country_origin'    => 'Colombia',
            'section_id'           => 1
        ]);

        $response->assertRedirect(route('Product.index'));

        $this->assertDatabaseHas('products', [
            'name'              => 'camisa',
            'price'             => 200,
            'country_origin'    => 'Colombia',
            'section_id'        => 1
        ]);
    }

    /**
     * @test
     */
    public function a_product_required_name()
    {
        $response = $this->post(route('Product.store'), [
            'name' => ''
        ]);

        $response->assertStatus(302);

        $response->assertSessionHasErrors('name');
    }
} # End class ProductTest
