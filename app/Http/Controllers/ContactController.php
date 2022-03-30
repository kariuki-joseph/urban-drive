<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message;

class ContactController extends Controller
{
    //GET all
    public function index(){
        return view('contact');
    }
    
    //POST
    public function store(Request $request){

       
        $contact= new message();
        $contact->username=$request->username;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->message=$request->message;
        $contact->save();

        return response()->json(array(
            'data'=>array(
                'status'=>true,
                'message'=>'Your message was successfully submitted. We will be getting back to you soon.'
            )
        ));
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
