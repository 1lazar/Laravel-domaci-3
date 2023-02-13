<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReservationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'reservation';
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->resource->id,
            'time_from' => $this->resource->time_from,
            'time_to' => $this->resource->time_to,
            'car_id' => $this->resource->car_id
        ];
    }
}
