<?php

namespace App\Http\Resources\Technician;

use App\Technician;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TechnicianCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        ResourceCollection::withoutWrapping();
        return [
            'data' =>TechnicianResource::collection($this->collection),
        ];
    }
}
