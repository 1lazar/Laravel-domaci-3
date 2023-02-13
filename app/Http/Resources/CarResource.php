<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'car';
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->resource->id,
            'brand' => $this->resource->brand,
            'model' => $this->resource->model,
            'year_of_car' => $this->resource->year_of_car,
            'price_of_car' => $this->resource->price_of_car
        ];
    }
}
