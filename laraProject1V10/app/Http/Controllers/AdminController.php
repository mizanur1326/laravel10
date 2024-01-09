<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function store(Request $request)
    {
        $user = $request->all();
        // dd($user);

        if(Auth::guard('admin')->attempt(
            ['email' => $user['email'], 
            'password' => $user['password']])){
                // echo "You Success";
                return redirect()->route('admin.dashboard');
        } else{
            // echo "You Failed";
            return view('admin.login');
        }
    }

}
