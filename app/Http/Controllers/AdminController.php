<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view ('adminviews.admin');
    }

    public function login(){
        return view('admin.admin-login');
    }
    public function admintrial(){
        return view ('adminviews.sample');
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
