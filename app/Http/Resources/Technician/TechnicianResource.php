<?php

namespace App\Http\Resources\Technician;

use Illuminate\Http\Resources\Json\JsonResource;

class TechnicianResource extends JsonResource
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
            'name' =>$this->name,
            'cnic' =>$this->cnic,
            'email' =>$this->email,
            'address' =>$this->address,
            'status' =>$this->status,
            'phone' =>$this->phone,
            'experience' => $this->experience,
            'rating' => $this->rating,
            'image' => $this->image,
            'specaility_id' =>$this->specaility_id

        ];
    }
}
