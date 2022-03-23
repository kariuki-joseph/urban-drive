<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    //GET all
    public function index(){
        return view('vehicles');
    }
    
    //POST
    public function store(Request $request){
        $car= new Car();
        $car->model=$request->model;
        $car->name=$request->name;
        $car->type=$request->type;
        $car->color=$request->color;
        $car->price=$request->price;
        
        //("$car");

        $car->save();

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
