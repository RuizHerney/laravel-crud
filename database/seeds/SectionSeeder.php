<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert(
            [
                'name' => 'Camisas'
            ],
            [
                'name' => 'Pantalones'
            ],
            [
                'name' => 'Chaquetas'
            ]
        );
    }
}
