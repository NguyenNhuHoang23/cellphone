<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class phone extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('phones')->insert([
            'name' => 'Samsung Galaxy S23 Ultra 12GB 512GB',
            'image_url' => 'https://cdn2.cellphones.com.vn/358x/media/catalog/product/s/2/s23-ultra-den_3.png',
        ]);
        DB::table('phones')->insert([
            'name' => 'Samsung Galaxy S23 Ultra 12GB 1TB',
            'image_url' => 'https://cdn2.cellphones.com.vn/insecure/rs:fill:0:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/s/2/s23-ultra-xanh_4.png',
        ]);
    }
}
