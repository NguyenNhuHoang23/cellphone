<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class student extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('student')->insert([
                              
            'name' => 'Nguyễn Như Hoàng',
            'class' => 'WE18327',
            'image' => 'https://haycafe.vn/wp-content/uploads/2021/12/hinh-anh-anime-nam-ngau-lanh-lung-1-742x600.jpg',
            'code' => 'PH34867',
            'date' => '2003-09-08',
            'sex_id' => '1',
            'majors' => 'webprogramming',
            'hometown' => 'Ha Noi',
        ]);
        DB::table('student')->insert([
            'name' => 'Nguyễn Như Minh',
            'class' => 'WE13455',
            'image' => 'https://khoinguonsangtao.vn/wp-content/uploads/2022/11/hinh-anh-anime-nam-toc-trang.jpg',
            'code' => 'PH45667',
            'date' => '2003-11-18',
            'sex_id' => '1',
            'majors' => 'webprogramming',
            'hometown' => 'Ha Noi',
        ]);
        DB::table('student')->insert([
            'name' => 'Nguyễn Minh Hiếu',
            'class' => 'WE32233',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEWTo90jkbOrp3JGLCTp-ZraYw3vIj6ezAtg&usqp=CAU',
            'code' => 'PH45567',
            'date' => '2004-11-09',
            'sex_id' => '1',
            'majors' => 'Ecommerce',
            'hometown' => 'Sơn La',
        ]);
        DB::table('student')->insert([
            'name' => 'Nguyễn Thị Mai',
            'class' => 'WE09884',
            'image' => 'https://haycafe.vn/wp-content/uploads/2022/02/Hinh-anh-con-gai-cute-de-thuong-hoat-hinh.jpg',
            'code' => 'PH54444',
            'date' => '2005-12-19',
            'sex_id' => '2',
            'majors' => 'Accountant',
            'hometown' => 'Ninh Bình',
        ]);
        DB::table('student')->insert([
            'name' => 'Nguyễn Tuấn Anh',
            'class' => 'WE12334',
            'image' => 'https://inkythuatso.com/uploads/thumbnails/800/2022/03/anh-dai-dien-anime-nam-20-30-15-34-24.jpg',
            'code' => 'PH55566',
            'date' => '2006-12-20',
            'sex_id' => '1',
            'majors' => 'Accountant',
            'hometown' => 'Bắc Giang',
        ]);

        DB::table('student')->insert([
            'name' => 'Nguyễn Thị Huyền',
            'class' => 'WE87766',
            'image' => 'https://i.pinimg.com/originals/32/62/43/3262438cdfbae2376daa76374189a14d.jpg',
            'code' => 'PH87757',
            'date' => '2004-03-10',
            'sex_id' => '2',
            'majors' => 'Marketing',
            'hometown' => 'Thanh Hóa',
        ]);

        DB::table('student')->insert([
            'name' => 'Nguyễn Thị Linh',
            'class' => 'WE44333',
            'image' => 'https://www.vietnamfineart.com.vn/wp-content/uploads/2023/03/anime-gai-va-hoa.jpg',
            'code' => 'PH15553',
            'date' => '2002-10-09',
            'sex_id' => '2',
            'majors' => 'Marketing',
            'hometown' => 'Nghệ An',
        ]);
        DB::table('student')->insert([
            'name' => 'Nguyễn Thị Giang',
            'class' => 'WE09873',
            'image' => 'https://i.pinimg.com/236x/95/ae/5f/95ae5f42a7aebdb1b075f821ab2eaa59.jpg',
            'code' => 'PH21553',
            'date' => '2001-11-29',
            'sex_id' => '2',
            'majors' => 'chef',
            'hometown' => 'Hà Nội',
        ]);

        DB::table('student')->insert([
            'name' => 'Nguyễn Quang Hiệp',
            'class' => 'WE22123',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyHf28GfGAs8bHHpi5TMd3T-RrNPPJkIoCjg&usqp=CAU',
            'code' => 'PH98433',
            'date' => '2007-11-29',
            'sex_id' => '1',
            'majors' => 'chef',
            'hometown' => 'Hà Nội',
        ]);

        DB::table('student')->insert([
            'name' => 'Nguyễn Thị Quyên',
            'class' => 'WE22444',
            'image' => 'https://png.pngtree.com/element_our/20190524/ourlarge/pngtree-hand-painted-cartoon-glasses-girl-avatar-quiet-cute-elegant-care-image_1096709.jpg',
            'code' => 'PH94444',
            'date' => '2008-11-30',
            'sex_id' => '2',
            'majors' => 'Marketing',
            'hometown' => 'Hà Nội',
        ]);
    }
}
