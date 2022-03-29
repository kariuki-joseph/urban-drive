<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
class ReviewController extends Controller
{
    //GET all
    public function index(){
         return view('reviews');
    }
    
    //POST
    public function store(Request $request){
   $review =new Review;
   $review->username=$request->username;
   $review->email=$request->email;
   $review->review=$request->review;
   $review->save();
   return redirect()->back();

   
       /* return response()->json(array(
            'data'=>array(
                'status'=>true,
                'message'=>'Your review was successfully submitted. Thank you for your feedback.'
            )
            ));*/
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
