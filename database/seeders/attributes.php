<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\product_attributes;
class attributes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
                'product_id'=>'1',
                'type'=>json_encode([
                                    ['color' => 'black','size' => 'small', 'image' => 'https://cdn.tgdd.vn/Files/2020/10/14/1298715/3_470x556.jpg', 'gb' => '128gb', 'ram' => '8gb'],
                                    ['color' => 'red', 'size' => 'medium', 'image' => 'https://cdn.tgdd.vn/Files/2020/10/14/1298721/y5_600x734.jpg','gb' => '240gb', 'ram' => '16gb'],
                                ]),
            ]
        ];
        foreach ($data as $item) {
            product_attributes::create($item);
        }
    }

}


