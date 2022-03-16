<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
