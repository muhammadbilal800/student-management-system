<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class StudentController extends Controller
{
    public function index(){
        return view('create-student',[
            'name'=> 'Add Student'
        ]);
    }
   

    public function show(){
        $students= Student::all();
        return view('show-student',[
            'students'=> $students
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            "name"=>"required|max:256",
            "address"=>"required|max:256",
            "number"=>"required|max:20|min:11"
        ]);


        Student::create([
            "name"=>$request->name,
            'slug'=> str_replace(' ','-',strtolower($request->name)),
            "address"=>$request->address,
            "number"=>$request->number,

        ]);

        return redirect('/show-student')->with('success','Student entry has been created!');


        
    }

    public function view(Student $student){
        return view('update-student',[
            'student' => $student,
            "name"=>"Update Student Record"
        ]);
    }

    public function update_student(Request $request, Student $student){
        $this->validate($request,[
            'name'=> 'required|max:256',
            'slug'=> 'required|max:256',
            'address'=>'required|max:256',
            'number'=>'required|min:9|max:20',
        ]);

        $array=[
            'name'=>$request->name,
            'slug'=> str_replace(' ','-',strtolower($request->slug)),
            'address'=>$request->address,
            'number'=> $request->number,
        ];

        $student->update($array);
        // dd($array);
        return redirect()->route('show.student')->with('success','Student Record has been Updated!');
    }
}
