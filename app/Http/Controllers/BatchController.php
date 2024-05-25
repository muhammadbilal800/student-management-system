<?php

namespace App\Http\Controllers;


use App\Models\Batch;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;



class BatchController extends Controller
{
    public function index(){
        $courses= Course::all();
        return view('create-batch',[
            'name'=> 'Add Batch',
            'courses'=> $courses,
        ]);
    }
   

    public function show(){
        $batches= Batch::all();
        return view('show-batch',[
            'batches'=> $batches
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            "name"=>"required|max:256",
            "date" => "required|date",
            "course_id" => "required|exists:courses,id",
        ]);


        Batch::create([
            "name"=>$request->name,
            'slug'=> str_replace(' ','-',strtolower($request->name)),
            "date"=>$request->date,
            "course_id" => $request->course_id,

        ]);

         return redirect('/show-batch')->with('success','Batch entry has been created!');

       

        
    }

    public function view(batch $batch){
        return view('update-batch',[
            'batch' => $batch,
            "name"=>"Update Batch Record"
        ]);
    }

    public function update_batch(Request $request, batch $batch){
        $this->validate($request,[
            'name'=> 'required|max:256',
            'slug'=> 'required|max:256',
            'date'=>'required',
           
        ]);

        $array=[
            'name'=>$request->name,
            'slug'=> str_replace(' ','-',strtolower($request->slug)),
            'date'=>$request->date,
        
        ];

        $batch->update($array);
        // dd($array);
        return redirect()->route('show.batch')->with('success','Batch Record has been Updated!');
    }

    public function destroy(Batch $batch){
        // $this->authorize('delete',$teacher);
        $batch->delete();
        return redirect()->route('show.batch')->with('success','Batch Record has been deleted Successfully!');
    }
}
