<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Car;
use App\Offer;
use App\Colors;
use App\Types;
use App\Models;
use App\Order;
use App\message;
use App\Review;
class AdminController extends Controller
{

    public function login(){
        $cars=Car::with("images")->get();
        $offers=Offer::all();
        $colors=Colors::all();
        $types=Types::all();
        $models=Models::all();
        return view('adminviews.admin-login')->with(['cars'=>$cars,'offers'=>$offers,'colors'=>$colors,'types'=>$types,'models'=>$models]);
    }
    public function index(){
        $cars=Car::with("images")->get();
        $colors=Colors::all();
        $types=Types::all();
        $models=Models::all();
return view('adminviews.dashboard',compact('cars','colors','types','models'));
// return view('adminviews.admin-login')->with(['cars'=>$cars,'colors'=>$colors,'types'=>$types,'models'=>$models]);
    }
    public function featured(){
        $offers=Offer::all();
        $colors=Colors::all();
        $types=Types::all();
        $models=Models::all();
        return view('adminviews.featured',compact('offers','models','types','colors'));
        
    }
    public function orders(){
        $orders=Order::all();

        return view('adminviews.orders',compact('orders'));
    }
    public function reviews(){
        $reviews=Review::all();

        return view('adminviews.reviews',compact('reviews'));
    }
    public function message(){
        $messages=message::all();
        // dd($messages);

        return view('adminviews.message',compact('messages'));
    }   
    public function handleLogin(Request $request){
        $email = $request->email;
        // dd($email);
        $password = $request->password;
       
        $admin = User::where('email','=',$email,'and')
        ->where('password','=',$password,'and')
        ->where('user_type','=','admin')->get();
        
        if($admin){
            //set admin session and redirect
            session(['admin'=>$admin]);
            $cars=Car::with("images")->get();
            $colors=Colors::all();
            $types=Types::all();
            $models=Models::all();

            return view('adminviews.dashboard',compact('cars','colors','types','models'));
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



}
