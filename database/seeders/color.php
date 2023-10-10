<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class colors extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('colors')->insert([
            'name' => 'vàng',
        ]);
        DB::table('colors')->insert([
            'name' => 'Đỏ',
        ]);
        DB::table('colors')->insert([
            'name' => 'Trắng',
        ]);
    }
}
