<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class cellphone extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('cellphone')->insert([
            'image' => 'sp/1.webp',
            'name' => 'IPhone 14 Pro Max',
            'original_price' => '29990000',
            'discount_price' => '26480000',
            'type' => '1',
            'sticky' => '1',
            'sale' => '5%',
            'special_offer' => '1',
        ]);
    }
}
