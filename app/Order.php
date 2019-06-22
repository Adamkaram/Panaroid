<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];




    public function Users () {
        return $this->belongsTo(user::class);
    
    
        }

        public function Products () {
            return $this->belongsToMany(Product::class);
            // $order = App\Order::all();
            // $order->Product()->attach(Product::class);
           
        }
}
