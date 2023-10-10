<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class infor extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('stafff')->insert([
            'name' => 'nguyennhuhoang',
            'date' => '2003-08-09',
            'infor' => 'Buồn cười',
            'sex_id' => '1',
        ]);
        DB::table('stafff')->insert([
            'name' => 'nguyen nhu hoang',
            'date' => '2004-08-09',
            'infor' => 'NNM',
            'sex_id' => '2',
        ]);
        DB::table('stafff')->insert([
            'name' => 'nguyen minh hieu',
            'date' => '2004-08-09',
            'infor' => 'NMH',
            'sex_id' => '1',
        ]);
        DB::table('stafff')->insert([
            'name' => 'nguyen thi hoa',
            'date' => '2004-08-09',
            'infor' => 'NTH',
            'sex_id' => '2',
        ]);
        DB::table('stafff')->insert([
            'name' => 'nguyen thi hoanh',
            'date' => '2004-08-09', 
            'infor' => 'NTH',
            'sex_id' => '2',
        ]);
    }
}
