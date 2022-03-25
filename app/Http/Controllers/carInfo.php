<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Colors;
use App\Types;
use App\Models;

class carInfo extends Controller
{
  public function addcolor(Request $request){
      $color= new Colors;
      $color->colors=$request->color;
      $color->save();
      return redirect()->back();

  }
  public function addtype(Request $request){
    $type= new types;
    $type->types=$request->types;
    $type->save();
    return redirect()->back();

}
public function addmodel(Request $request){
    $model= new Models;
    $model->model=$request->model;
    // dd($model);
    $model->save();
    return redirect()->back();

}
    
}
