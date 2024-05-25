<?php

namespace App\Http\Controllers;


use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;


class CourseController extends Controller
{
    public function index(){
        return view('create-course',[
            'name'=> 'Add course'
        ]);
    }
   

    public function show(){
        $courses= Course::all();
        return view('show-course',[
            'courses'=> $courses
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            "name"=>"required|max:256",
            "syllabus"=>"required|max:256",
            "duration"=>"required|numeric|max:52|min:1"
        ]);


        Course::create([
            "name"=>$request->name,
            'slug'=> str_replace(' ','-',strtolower($request->name)),
            "syllabus"=>$request->syllabus,
            "duration"=>$request->duration,

        ]);

         return redirect('/show-course')->with('success','Course entry has been created!');

       

        
    }

    public function view(course $course){
        return view('update-course',[
            'course' => $course,
            "name"=>"Update course Record"
        ]);
    }

    public function update_course(Request $request, course $course){
        $this->validate($request,[
            'name'=> 'required|max:256',
            'slug'=> 'required|max:256',
            'syllabus'=>'required|max:256',
            'duration'=>'required|numeric|min:1|max:52',
        ]);

        $array=[
            'name'=>$request->name,
            'slug'=> str_replace(' ','-',strtolower($request->slug)),
            'syllabus'=>$request->syllabus,
            'duration'=> $request->duration,
        ];

        $course->update($array);
        // dd($array);
        return redirect()->route('show.course')->with('success','Course Record has been Updated!');
    }

    public function destroy(Course $course){
        // $this->authorize('delete',$teacher);
        $course->delete();
        return redirect()->route('show.course')->with('success','Course Record has been deleted Successfully!');
    }
}
