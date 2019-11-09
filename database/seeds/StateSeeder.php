<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert(
            [
                [
                    'name' => 'Activo/a'
                ],
                [
                    'name' => 'Inactivo/a'
                ]
            ]
        );
    }
}
