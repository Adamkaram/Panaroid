<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    protected $guarded = [];
    
    public function Products()
    {
        return $this->belongsToMany(Product::class);
        // $Categories = App\Categories::all();
        // $Categories->Products()->attach(Product::class);
    }
}
