<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function store(){
        auth()->logout();
        $notification = array(
            'message' => 'User Logged out Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('home')->with($notification);
    }
}
