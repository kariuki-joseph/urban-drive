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
        


        $car->model=$request->model;
        $car->name=$request->name;
        $car->type=$request->type;
        $car->color=$request->color;
        $car->price=$request->price;
        $car->description = $request->description;

        
        $car->save();
        
        $car->images()->create([
            'url'=>$imagename
        ]);
        $image->move('img',$imagename);
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
    public function search(Request $request) {

        // Sets the parameters from the get request to the variables.
        $type=$request->type;
        $model=$request->model;
        $color=$request->color;        
        // Perform the query using Query Builder
        $results =Car::all()->where('color', '=', $color, 'and')
        ->where('model', '=', $model, 'and')
        ->where ('type', '=', $type);
        
        return view('search',compact('results'));
        }
        
}
