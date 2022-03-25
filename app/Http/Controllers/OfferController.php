<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;

class OfferController extends Controller
{
    //GET all
    public function index(){
        $offers=Offer::with('images')->get();
        return view('featured',compact('offers'));
    }
    
    //POST
    public function store(Request $request){
       $offer= new Offer();
        $image = $request->file('image');
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $image->move('img_offer',$imagename);


       $offer->model=$request->model;
       $offer->name=$request->name;
       $offer->type=$request->type;
       $offer->color=$request->color;
       $offer->price=$request->price;
       $offer->description ="jfsjfjj";

        
       $offer->save();

       $offer->images()->create([
            'url'=>$imagename
        ]);
     return redirect()->back();

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
