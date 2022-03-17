<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index(){
        return view ('adminviews.dashboard');
    }

    public function login(){
        return view('adminviews.admin-login');
    }
    public function featured(){
        return view('adminviews.featured');
    }
    public function orders(){
        return view('adminviews.orders');
    }
    public function reviews(){
        return view('adminviews.reviews');
    }
    public function handleLogin(Request $request){
        $email = $request->email;
        $password = $request->password;
        $admin = User::where('email','=',$email,'and')
        ->where('password','=',$password,'and')
        -where('user_type','=','admin')->get();
        
        if($admin){
            //set admin session and redirect
            session(['admin'=>$admin]);
            return view('adminviews.dashboard');
        }else{
            redirect()->back()->with('error', 'Unable to verify your credentials. Please try again.');
        }
    }
    public function message(){
        return view('adminviews.message');
    }
}
