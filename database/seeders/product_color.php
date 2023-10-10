<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class product_color extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('product_color')->insert([
            'product_id' => '7',
            'color_id' => '2',
            'image' => 'https://img.nhandan.com.vn/Files/Images/2020/07/26/nhat_cay-1595747664059.jpg',
        ]);
    }
}
