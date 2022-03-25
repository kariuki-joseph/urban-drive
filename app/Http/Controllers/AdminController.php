<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Car;
use App\Offer;
use App\Colors;
use App\Types;
use App\Models;
class AdminController extends Controller
{

    public function login(){
        $cars=Car::all();
        $offers=Offer::all();
        $colors=Colors::all();
        $types=Types::all();
        $models=Models::all();
        
        return view('adminviews.admin-login',compact('cars','offers','colors','types','models'));
    }
    public function index(){
        $cars=Car::all();
        $colors=Colors::all();
        $types=Types::all();
        $models=Models::all();
return view('adminviews.dashboard',compact('cars','colors','types','models'));
    }
    public function featured(){
        $offers=Offer::all();
        return view('adminviews.featured',compact('offers'));
        
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
        ->where('user_type','=','admin')->get();
        
        if($admin){
            //set admin session and redirect
            session(['admin'=>$admin]);
            $cars=Car::all();
            return view('adminviews.dashboard',compact('cars'));
        }else{
            redirect()->back()->with('error', 'Unable to verify your credentials. Please try again.');
        }
    }
    public function carinfopage(){
        $colors=Colors::all();
        $types=Types::all();
        $models=Models::all();
        return view('adminviews.carinfos',compact('colors','types','models'));
        
 }



    
    public function message(){
        return view('adminviews.message');
    }
}
