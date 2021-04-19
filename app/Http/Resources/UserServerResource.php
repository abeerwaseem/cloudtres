<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class UserServerResource extends JsonResource
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
            'title'         =>   $this->pivot->name,
            'vendor'        =>   $this->vendor->name,
            'server'        =>   $this->name,
            'status'        =>   $this->pivot->status,
            'created_at'    =>   Carbon::parse($this->pivot->created_at)->format('d/m/Y')
        ];
    }
}
