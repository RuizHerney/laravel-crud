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
     *  Testing un asuario puede crear un producto
     * 
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
     *  Testing Un producto requiere un nombre
     * 
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

    /**
     * Testing El campo name solo puede tener letras
     * 
     * @test
     */
    public function product_name_field_only_has_letters()
    {
        $response = $this->post(route('Product.store'), [
            'name' => '123'
        ]);

        $response->assertStatus(302);

        $response->assertSessionHasErrors('name');
    }

    /**
     * Testing El campo name requiere minimo 4 caracteres
     * 
     * @test
     */
    public function product_name_required_minimum_four_characters()
    {
        $response = $this->post(route('Product.store'), [
            'name' => 'sol'
        ]);

        $response->assertStatus(302);

        $response->assertSessionHasErrors('name');
    }

    /**
     * Testing El campo name requiere minimo 4 caracteres
     * 
     * @test
     */
    public function product_name_required_maximum_twenty_characters()
    {
        $response = $this->post(route('Product.store'), [
            'name' => 'nomasdetreinta'
        ]);

        $response->assertStatus(302);

        $response->assertSessionHasErrors('name');
    }
    
} # End class ProductTest
