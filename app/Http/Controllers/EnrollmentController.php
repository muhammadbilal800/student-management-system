<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use App\Models\Student;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class EnrollmentController extends Controller
{
    public function index(){
        $batches = Batch::all(); // Corrected table name
        $students = Student::all();
        return view('create-enroll',[
            'name'=> 'Add enroll',
            'batches'=> $batches, // Corrected variable name
            'students'=> $students,
        ]);
    }

    public function show(){
        $enrollments = Enrollment::all();
        $batches = Batch::all(); // Corrected table name
        return view('show-enroll',[
            'enrollments' => $enrollments, // Corrected variable name
            'batches' => $batches, // Corrected variable name
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            "enroll_no" => "required|max:256",
            "batch_id" => "required|exists:batches,id", // Corrected table name
            "student_id" => "required|exists:students,id",
            "join_date" => "required|date",
            "fee" => "required|numeric|min:0",
        ]);

        Enrollment::create([
            "enroll_no" => $request->enroll_no,
            'slug' => str_replace(' ','-',strtolower($request->enroll_no)),
            "join_date" => $request->join_date,
            "batch_id" => $request->batch_id,
            "student_id" => $request->student_id,
            'fee' => $request->fee,
        ]);

        return redirect('/show-enroll')->with('success','Enrollment entry has been created!');
    }

    public function view(Enrollment $enrollment){
        return view('update-enroll',[
            'enrollment' => $enrollment,
            "name" => "Update enroll Record"
        ]);
    }

//     public function update_enroll(Request $request, Enrollment $enrollment){
//         $this->validate($request,[
//             "enroll_no" => "required|max:256",
//             "batch_id" => "required|exists:batches,id", // Corrected table name
//             "student_id" => "required|exists:students,id",
//             "join_date" => "required|date",
//             "fee" => "required|numeric|min:0",
//         ]);

//         $array = [
//             'enroll_no' => $request->enroll_no,
//             'slug' => str_replace(' ','-',strtolower($request->enroll_no)),
//             'batch_id' => $request->batch_id,
//             'student_id' => $request->student_id,
//             'join_date' => $request->join_date,
//             'fee' => $request->fee,
//         ];
        
//         $enrollment->update($array);

//         return redirect()->route('show.enroll')->with('success','Enroll Record has been Updated!');
//    }


public function update_enroll(Request $request, Enrollment $enrollment){
    $this->validate($request,[
        "enroll_no" => "required|max:256",
        "batch_id" => "required|exists:batches,id",
        "student_id" => "required|exists:students,id",
        "join_date" => "required|date",
        "fee" => "required|numeric|min:0",
    ]);

    $enrollment->update([
        'enroll_no' => $request->enroll_no,
        'slug' => str_replace(' ', '-', strtolower($request->enroll_no)),
        'batch_id' => $request->batch_id,
        'student_id' => $request->student_id,
        'join_date' => $request->join_date,
        'fee' => $request->fee,
    ]);

    return redirect()->route('show.enroll')->with('success', 'Enroll Record has been Updated!');
}

}
