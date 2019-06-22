<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];


  
    public function Orders () {
        return $this->belongsToMany(Order::class);


    }
    public function Categories () {
        return $this->belongsToMany(Categories::class);

    }

    public function User () {

        return $this->belongsTo(User::class);

    }
}
