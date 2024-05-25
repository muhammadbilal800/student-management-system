<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;


class TeacherController extends Controller
{
    public function index(){
        return view('create-teacher',[
            'name'=> 'Add teacher'
        ]);
    }
   

    public function show(){
        $teachers= teacher::all();
        return view('show-teacher',[
            'teachers'=> $teachers
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            "name"=>"required|max:256",
            "address"=>"required|max:256",
            "number"=>"required|max:20|min:11"
        ]);


        teacher::create([
            "name"=>$request->name,
            'slug'=> str_replace(' ','-',strtolower($request->name)),
            "address"=>$request->address,
            "number"=>$request->number,

        ]);

         return redirect('/show-teacher')->with('success','Teacher entry has been created!');

       

        
    }

    public function view(teacher $teacher){
        return view('update-teacher',[
            'teacher' => $teacher,
            "name"=>"Update teacher Record"
        ]);
    }

    public function update_teacher(Request $request, teacher $teacher){
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

        $teacher->update($array);
        // dd($array);
        return redirect()->route('show.teacher')->with('success','Teacher Record has been Updated!');
    }

    public function destroy(Teacher $teacher){
        // $this->authorize('delete',$teacher);
        $teacher->delete();
        return redirect()->route('show.teacher')->with('success','Teacher Record has been deleted Successfully!');
    }

}
