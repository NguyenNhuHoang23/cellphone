<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            'name' => 'Điện thoại',
            'image' => 'https://vtv1.mediacdn.vn/2019/10/10/photo-1-15706463929181755249740.jpg',
            'alias' => 'dien-thoai',
            'quantity' => '25',
            'national' => 'Việt Nam',
            'price' => '1000000',
            'describe' => 'Tốt',
            'sale_percent' => '1',
            'loai' => '1',
        ]);

        DB::table('products')->insert([
            'name' => 'Tủ lạnh',
            'image' => 'https://www.dienlanh.com/wp-content/uploads/2017/08/NR-BA228VSVN.png',
            'alias' => 'tu-lanh',
            'quantity' => '15',
            'national' => 'Nhật Bản',
            'price' => '200000',
            'describe' => 'Tốt',
            'sale_percent' => '2',
            'loai' => '1',
        ]);

        DB::table('products')->insert([
            'name' => 'Tivi',
            'image' => 'https://cdn.tgdd.vn/Files/2014/10/29/577178/diem-mat-nhung-do-phan-giai-pho-bien-hien-nay-tren-6.jpg',
            'alias' => 'ti-vi',
            'quantity' => '35',
            'national' => 'Nhật Bản',
            'price' => '30000',
            'describe' => 'Tốt',
            'sale_percent' => '3',
            'loai' => '1',
        ]);

        DB::table('products')->insert([
            'name' => 'Xe điện',
            'image' => 'https://bizweb.dktcdn.net/100/298/750/products/xe-dien-m133-s3-3.jpg?v=1569130280640',
            'alias' => 'xe-dien',
            'quantity' => '55',
            'national' => 'Việt Nam',
            'price' => '50000',
            'describe' => 'Tốt',
            'sale_percent' => '4',
            'loai' => '2',
        ]);

        DB::table('products')->insert([
            'name' => 'Máy Tính',
            'image' => 'https://www.buaxua.vn/images/computer/may-vi-tinh-de-ban-desktop-tower.jpg',
            'alias' => 'may-tinh',
            'quantity' => '55',
            'national' => 'Việt Nam',
            'price' => '145000',
            'describe' => 'Tốt',
            'sale_percent' => '5',
            'loai' => '1',
        ]);

        DB::table('products')->insert([
            'name' => 'Pc cây',
            'image' => 'https://cdn.tgdd.vn/Files/2018/09/26/1120348/vi-sao-nen-mua-man-hinh-3d-cho-may-tinh-pc--3.jpg',
            'alias' => 'pc-cay',
            'quantity' => '15',
            'national' => 'Nhật bản',
            'price' => '1000000',
            'describe' => 'Tốt',
            'sale_percent' => '2',
            'loai' => '1',
        ]);

        DB::table('products')->insert([
            'name' => 'Ipad',
            'image' => 'https://cdn.tgdd.vn/Files/2021/01/13/1319910/ipad-pro-1_800x450.jpg',
            'alias' => 'i-pad',
            'quantity' => '65',
            'national' => 'Việt Nam',
            'price' => '5500000',
            'describe' => 'Tốt',
            'sale_percent' => '5',
            'loai' => '1',
        ]);

        DB::table('products')->insert([
            'name' => 'Oto',
            'image' => 'https://static.danhgiaxe.com/data/201525/aston-martin-vanquish_6443.jpg',
            'alias' => 'o-to',
            'quantity' => '75',
            'national' => 'Việt Nam',
            'price' => '6000000',
            'describe' => 'Tốt',
            'sale_percent' => '1',
            'loai' => '2',
        ]);

        DB::table('products')->insert([
            'name' => 'Bàn phím',
            'image' => 'https://haycafe.vn/wp-content/uploads/2022/03/anh-ban-phim-may-tinh-1.jpg',
            'alias' => 'ban-phim',
            'quantity' => '125',
            'national' => 'Việt Nam',
            'price' => '1000000',
            'describe' => 'Tốt',
            'sale_percent' => '3',
            'loai' => '1',
        ]);

        DB::table('products')->insert([
            'name' => 'Xe đạp',
            'image' => 'https://xedapgiakho.vn/wp-content/uploads/2020/12/z2135588568309_29904012a0c19be1094827ec29d6cb5b.png',
            'alias' => 'xe-dap',
            'quantity' => '115',
            'national' => 'Việt Nam',
            'price' => '4000000',
            'describe' => 'Tốt',
            'sale_percent' => '4',
            'loai' => '2',
        ]);
    }
}
