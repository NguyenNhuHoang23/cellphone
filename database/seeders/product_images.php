<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class product_images extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('product_images')->insert([
            'product_id' => '7',
            'color' => 'Đen',
            'image_path' => 'https://cdn.tgdd.vn/Files/2020/10/14/1298720/iphone-12-mini-black-select-2020_800x700.jpg',
        ]);
        DB::table('product_images')->insert([
            'product_id' => '8',
            'color' => 'Vàng',
            'image_path' => 'https://vcdn-sohoa.vnecdn.net/2023/03/07/a2-9005-1678197385.jpg',
        ]);
        DB::table('product_images')->insert([
            'product_id' => '9',
            'color' => 'Hồng',
            'image_path' => 'https://cdn.tgdd.vn/hoi-dap/1005996/top-3-dien-thoai-mau-hong-de-thuong-160-800x600.jpg',
        ]);
    }
}
