<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    //GET all
    public function index(){
        return view('contact');
    }
    
    //POST
    public function store(Request $request){
        $username = $request->username;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        $contact =  new Contact();
        $contact->username = $username;
        $contact->email = $email;
        $contact->subject = $subject;
        $contact->message =$message;
        $contact->save();
        
        return response()->json(array(
            'data'=>array(
                'status'=>true,
                'message'=>'Your message was successfullu submitted. We will be getting back to you soon.'
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
