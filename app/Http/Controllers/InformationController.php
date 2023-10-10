<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    //
    public function name($title){
        try{
        if($title == "hoang"){
            $information = [   
                            'tuoi' => '20 tuổi', 
                            'chieu cao' => '1m70',
                            'Ngay sinh' => '08/09/2003',
                            'Tinh trang quan he' => 'Đã Kết Hôn',];
            dd($ida);
            $name = "hoang";
            $namefamily = ['namefml' => 'Các Thành Viên'];
            $family =['Father' => 'Nguyễn Như A',
                    'Mom' => 'Nguyễn Thị B',
                    'Sister' => 'Nguyễn Thị C'];
            return view('information', compact('information','name' ,'namefamily'));
        }else if($title == "hieu"){
            $information = ['Tuoi' => '19 tuổi',
                    'Chiều cao' => '1m73',
                    'Ngày sinh' => '09/12/2004',
                    'Tinh trạng quan hệ' => 'Kết Hôn'];

            $name = "Hieu";
            $namefamily = ['namefml' => 'Các Thành Viên'];
            $family =['Father' => 'Nguyễn Như A',
            'Mom' => 'Nguyễn Thị B',
            'Brother' => 'Nguyễn Như C'];
            return view('information', compact('information', 'name', 'family','namefamily'));

        }else{
            $orther = 'Không có dữ liệu';
            return view('information', compact('orther'));
        }
    }catch(\Exception $e){
        $error = "Có lỗi xảy ra: $title";
        return view('404', compact('error'));
    }
}   
}
