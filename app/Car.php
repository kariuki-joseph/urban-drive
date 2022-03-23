<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    public $timestamps = false;
    

    //relationships
    public function images(){
        return $this->hasMany(Image::class);
    }
}
