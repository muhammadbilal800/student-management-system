<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index(){
        return view('auth.signup',[
            'name'=>'Signup'
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|max:256',
            'email'=>'required|max:256',
            'password'=>'required|max:256|min:6|confirmed'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        return back()->with('success','Account has been created!');
    }
}
