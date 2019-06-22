<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Rating extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[

            'Product_id' => $this->user_id,
            'user_id'   =>  $this->Product_id,
            'rating'   =>   $this->rating,
        ];
    }
}
