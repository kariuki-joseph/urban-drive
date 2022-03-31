<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    public function images(){
        return $this->hasMany(Image::class,'car_id');
}
//get car info
public function car(){
    return $this->belongsTo(Car::class);
}
}
