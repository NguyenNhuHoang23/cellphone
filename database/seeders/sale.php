<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sale extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('sale')->insert([
            'sale_percenr' => '%10',
        ]);

        DB::table('sale')->insert([
            'sale_percenr' => '%40',
        ]);
        DB::table('sale')->insert([
            'sale_percenr' => '%20',
        ]);
        DB::table('sale')->insert([
            'sale_percenr' => '%30',
        ]);
        DB::table('sale')->insert([
            'sale_percenr' => '%50',
        ]);

        
    }
}
