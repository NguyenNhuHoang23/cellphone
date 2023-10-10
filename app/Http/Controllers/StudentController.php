<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\student;
use App\Models\Sex;  

class StudentController extends Controller
{
    //
    public function student(){
        $male = student::join('sex as s', 's.sex_id', '=', 'student.sex_id')
        -> select('s.*', 'student.*')
        -> where('student.sex_id', '1')
        -> get();

        $female = student::join('sex as s', 's.sex_id', '=', 'student.sex_id')
        -> select('s.*', 'student.*')
        -> where('student.sex_id', '2')
        -> get();

        return view('showstudent', ['male' => $male, 'female' => $female]);
    }

    public function insert()
    {
        return view('create');
    }

    public function store(Request $request)
    {   
        // Xử lý và lưu dữ liệu vào cơ sở dữ liệu
        student::create([
            'name' => $request->input('name'),
            'class' => $request->input('class'),
            'image' => $request->input('img'),
            'code' => $request->input('code'),
            'date' => $request->input('date'),
            'sex_id' => $request->input('sex'),
            'majors' => $request->input('majors'),
            'hometown' => $request->input('hometown'),
        ]);

        // Chuyển hướng sau khi lưu thành công
        return redirect('/student')->with('insert', 'Dữ liệu đã được lưu thành công!');
    }


    public function update($id)
    {   
        

        $student = student::find($id);
        if($student){   
            return view('updatestudent', ['student' => $student]);
        }else{
            $message = "Không có dữ liệu của id đó";
            return view('updatestudent', ['message' => $message]);
        }

    }
    public function updatedatabase(Request $request, $id){
        
        $student = student::find($id);
            $student->name = $request->input('name');
            $student->class = $request->input('class');
            $student->image = $request->input('image');
            $student->code = $request->input('code');
            $student->date = $request->input('date');
            $student->sex_id = $request->input('sex');
            $student->majors = $request->input('majors');
            $student->hometown = $request->input('hometown');
            $student->save();
        
        
        return redirect('/student')->with('student', 'Dữ liệu được thêm thành công');
    }


    public function delete($id){
        $student = student::find($id);
        $student->delete();
        return redirect('/student')->with('sos', 'Dữ liệu đã được xóa');

    }
}
