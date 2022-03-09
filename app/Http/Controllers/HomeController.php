<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function services(){
        return view('services');
    }
    public function featured(){
        return view('featured');
    }
     public function reviews(){
        return view('reviews');
    }
     public function contact(){
        return view('contact');
    }
    public function vehicles(){
        return view('vehicles');
    }
    
}
