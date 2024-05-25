<?php

namespace App\Http\Controllers;


use App\Models\Enrollment;
use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class PaymentController extends Controller
{
    public function index(){
       $enrollments= Enrollment::all();
        return view('create-payment',[
            'name'=> 'Add Payment',
            'enrollments'=> $enrollments, 
        ]);
    }

    public function show(){
        $payments = Payment::all();
        $enrollments= Enrollment::all();
        return view('show-payment',[
            'payments' => $payments, 
            'enrollments'=> $enrollments,
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            "enrollment_id" => "required|exists:enrollments,id", 
            "paid_date" => "required|date",
            "amount" => "required|numeric|min:0",
        ]);

        Payment::create([
            "enrollment_id" => $request->enrollment_id,
            'slug' => str_replace(' ','-',strtolower($request->enrollment_id)),
            "paid_date" => $request->paid_date,
            'amount' => $request->amount,
        ]);

        return redirect('/show-payment')->with('success','Payment  has been added!');
    }

    public function view(Payment $payment){
        return view('update-payment',[
            'payment' => $payment,
            "name" => "Update Payment Record"
        ]);
    }

    public function update_payment(Request $request, payment $payment){
        $this->validate($request,[
            "enrollment_id" => "required|exists:enrollments,id",
            "paid_date" => "required|date",
            "amount" => "required|numeric|min:0",
        ]);

        $array = [
            'enrollment_id' => $request->enrollment_id,
            'slug' => str_replace(' ','-',strtolower($request->enrollment_id)),
            'paid_date' => $request->paid_date,
            'amount' => $request->amount,
        ];
        
        $payment->update($array);

        return redirect()->route('show.payment')->with('success','Payment Record has been Updated!');
   }

   public function destroy(Payment $payment){
    // $this->authorize('delete',$teacher);
    $payment->delete();
    return redirect()->route('show.payment')->with('success','Payment Record has been deleted Successfully!');
}

}
