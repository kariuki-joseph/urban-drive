<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    //GET all
    public function index(){

    }
    
    //POST
    public function store(Request $request){

        $order= new Order();
        $order->carId=$request->id;
        $order->contact=$request->contact;
        $order->save();
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
