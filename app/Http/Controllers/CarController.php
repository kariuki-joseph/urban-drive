<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Colors;
use App\Types;
use App\Models;

class CarController extends Controller
{
    //GET all
    public function index(){
        $cars=Car::with('images')->get();
        $colors=Colors::all();
        $types=Types::all();
        $models=Models::all();
    
        return view('vehicles',compact('cars','colors','types','models'));
    }   
    
    //POST
    public function store(Request $request){
    
        $car= new Car();
        $image = $request->file('image');
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $image->move('img',$imagename);


        $car->model=$request->model;
        $car->name=$request->name;
        $car->type=$request->type;
        $car->color=$request->color;
        $car->price=$request->price;
        $car->description ="
        uses petrol
        automatic
        zero mileage
        brand new model";

        
        $car->save();
        

        $car->images()->create([
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
        $cars=Car::find($id);
        $cars->delete();
        return redirect()->back();
        
    }
}
