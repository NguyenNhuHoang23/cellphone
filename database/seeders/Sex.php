<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sex extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('sex')->insert([
            'sex_id' => '1',
            'sex' => 'nam',
        ]);
        DB::table('sex')->insert([
            'sex_id' => '2',
            'sex' => 'nu',
        ]);

    }
}
