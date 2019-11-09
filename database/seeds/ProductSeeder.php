<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'name' => 'Camisa - red',
                    'price' => 15.000,
                    'country_origin' => 'Colombia',
                    'id_section' => 1,
                    'id_state' => 1
                ],
                [
                    'name' => 'Pantalon - blue',
                    'price' => 20.000,
                    'country_origin' => 'Venezuela',
                    'id_section' => 2,
                    'id_state' => 1
                ],
                [
                    'name' => 'Chaqueta - yellow',
                    'price' => 25.000,
                    'country_origin' => 'Chile',
                    'id_section' => 3,
                    'id_state' => 2
                ]
            ]
        );
    }
}
