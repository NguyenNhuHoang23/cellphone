<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff; 
use App\Models\Sex;

class StaffController extends Controller
{
    //
    public function all(){
        $q = Staff::all();
        return view('staff', ['staff' => $q]);
    }

    public function showid($id){

        $showid = Staff::select('name', 'infor')->where('id', $id)->first();
        if ($showid) {
            // Tìm thấy người dùng
            return view('showid', ['showid' => $showid]);
        }
        else {
    $message = "Không tìm thấy người dùng với ID $id";
    return view('showid', ['message' => $message]);
        }
    }

    
    public function show45(){
        $d = Staff::whereIn('id', [4, 5])
                        ->get();
        return view('show45', ['show' => $d]);
    }

    public function showname($name){
        $showname = Staff::where('name', $name)->first();
        
        if ($showname) {
            // Tìm thấy người dùng
            return view('click', ['showname' => $showname]);
        }
        else {
    $message1 = "Không tìm thấy người dùng với ID $name";
    return view('click', ['message1' => $message1]); 
        }
    }




    public function join(){

        $sex = Sex::join('stafff as s', 'sex.sex_id', '=', 's.sex_id')
        ->select('s.*', 'sex.*', 's.name as stafff_name')

        ->get();

        return view('join', ['showse' => $sex]);

}
}