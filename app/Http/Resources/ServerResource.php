<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ServerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'            =>   $this->id,
            'name'          =>   $this->name,
            'description'   =>   $this->description,
            'cost'          =>   $this->cost,
            'vendor'        =>   $this->vendor->name
        ];
    }
}
