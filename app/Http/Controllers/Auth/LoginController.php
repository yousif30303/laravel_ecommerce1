<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required',
        ]);

        if(!auth()->attempt($request->only('username','password'))){
            return back()->with('status','Invalid Login Details');
        }
        $notification = array(
            'message' => 'User Logged in Successfully', 
            'alert-type' => 'success'
        );
        

        return redirect()->route('home')->with($notification);

    }
}
