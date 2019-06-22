<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [

        'Product_id','user_id','rating'
    ];
}
