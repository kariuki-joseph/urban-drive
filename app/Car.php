<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    public $timestamps = false;


    //relationships
    public function images(){
        return $this->hasMany(Image::class,'car_id');
    }
    public function car(){
        return $this->belongsTo(Car::class);
    }
}
