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
                    'section_id' => 1,
                    'state_id' => 1
                ],
                [
                    'name' => 'Pantalon - blue',
                    'price' => 20.000,
                    'country_origin' => 'Venezuela',
                    'section_id' => 2,
                    'state_id' => 1
                ],
                [
                    'name' => 'Chaqueta - yellow',
                    'price' => 25.000,
                    'country_origin' => 'Chile',
                    'section_id' => 3,
                    'state_id' => 2
                ]
            ]
        );
    }
}
