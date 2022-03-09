<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //GET all
    public function index(){
        return view('contact');
    }
    
    //POST
    public function store(Request $request){

    }

    // GET one
    public function show(Request $request, $id){

    }

    //UPDATE
    public function update(Request $request, $id){

    }

    //DELETE
    public function destroy($id){
        
    }
}
