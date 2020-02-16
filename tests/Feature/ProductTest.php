<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use ProductSeeder;
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
            'section_id'        => 1
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
     *  Testing Un producto requiere un Pais
     * 
     * @test
     */
    public function a_product_required_country_origin()
    {
        $response = $this->post(route('Product.store'), [
            'country_origin' => ''
        ]);

        $response->assertStatus(302);

        $response->assertSessionHasErrors('country_origin');
    }

    /**
     *  Testing Un producto requiere un precio
     * 
     * @test
     */
    public function a_product_required_price()
    {
        $response = $this->post(route('Product.store'), [
            'price' => ''
        ]);

        $response->assertStatus(302);

        $response->assertSessionHasErrors('price');
    }

    /**
     *  Testing Un producto requiere un seccion
     * 
     * @test
     */
    public function a_product_required_section()
    {
        $response = $this->post(route('Product.store'), [
            'section_id' => ''
        ]);

        $response->assertStatus(302);

        $response->assertSessionHasErrors('section_id');
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
     * Testing El campo country_origin solo puede tener letras
     * 
     * @test
     */
    public function product_country_origin_field_only_has_letters()
    {
        $response = $this->post(route('Product.store'), [
            'country_origin' => '123'
        ]);

        $response->assertStatus(302);

        $response->assertSessionHasErrors('country_origin');
    }

    /**
     * Testing El campo price solo puede tener numeros
     * 
     * @test
     */
    public function product_price_field_only_has_number()
    {
        $response = $this->post(route('Product.store'), [
            'price' => 'number'
        ]);

        $response->assertStatus(302);

        $response->assertSessionHasErrors('price');
    }

    /**
     * Testing El campo section_id solo puede tener numeros
     * 
     * @test
     */
    public function product_section_id_field_only_has_number()
    {
        $response = $this->post(route('Product.store'), [
            'section_id' => 'number'
        ]);

        $response->assertStatus(302);

        $response->assertSessionHasErrors('section_id');
    }

    /**
     * Testing El campo country_origin requiere minimo 4 caracteres
     * 
     * @test
     */
    public function product_country_origin_required_minimum_four_characters()
    {
        $response = $this->post(route('Product.store'), [
            'country_origin' => 'per'
        ]);

        $response->assertStatus(302);

        $response->assertSessionHasErrors('country_origin');
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
     * Testing El campo price requiere minimo un 10 como valor
     * 
     * @test
     */
    public function product_price_required_minimum_ten_as_value()
    {
        $response = $this->post(route('Product.store'), [
            'price' => '9'
        ]);

        $response->assertStatus(302);

        $response->assertSessionHasErrors('price');
    }

    /**
     * Testing El campo section_id requiere minimo un 10 como valor
     * 
     * @test
     */
    public function product_section_id_required_minimum_ten_as_value()
    {
        $response = $this->post(route('Product.store'), [
            'section_id' => '0'
        ]);

        $response->assertStatus(302);

        $response->assertSessionHasErrors('section_id');
    }

    /**
     * Testing El campo name requiere maximo 30 caracteres
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

    /**
     * Testing El campo country_origin requiere maximo 20 caracteres
     * 
     * @test
     */
    public function product_country_origin_required_maximum_twenty_characters()
    {
        $response = $this->post(route('Product.store'), [
            'country_origin' => 'nomasdeveintecaracteres'
        ]);

        $response->assertStatus(302);

        $response->assertSessionHasErrors('country_origin');
    }

    /**
     * Testing El campo price requiere maximo 200 como valor
     * 
     * @test
     */
    public function product_name_required_maximum_twenty_as_value()
    {
        $response = $this->post(route('Product.store'), [
            'price' => '201'
        ]);

        $response->assertStatus(302);

        $response->assertSessionHasErrors('price');
    }
    
} # End class ProductTest
