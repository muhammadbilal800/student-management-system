<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login',[
            'name'=>'Login Page'
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);

      if(!Auth::attempt(($request->only(['email','password'])),
    $request->remember)){
        return back()->with('failed','Email and Passowrd does not match!');
    }

    return redirect()->route('dashboard');

    }
}
