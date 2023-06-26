<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use DB;

class StudentsController extends Controller
{

    // public function Create(){
    //     return view('Create');
    // }

    public function home() {
        $students = Student::get();
        dd($students);
        return view('home');
    }



    public function insert(Request $request){
        $name = $request->input('name');
        $phone = $request->input('phone_number');
        $course = $request->input('course');


        //insert operation
        DB::insert("insert into users(name, phone_number, course) values(?, ?, ?)", [$name, $phone, $course]);

        return 'Record Insert successfully!<a href="/Create">Click Here go to back</a>';
    }
}
