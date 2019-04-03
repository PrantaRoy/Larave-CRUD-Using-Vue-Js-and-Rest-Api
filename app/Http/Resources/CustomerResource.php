<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
            'Name'=> $this->name,
            'Email'=> $this->email,
            'Cell'=> $this->phone,
            'Address'=> $this->address,
            'Blood'=> $this->blood,
            'Desigination'=> $this->desigination,
            'Salary'=> $this->salary,
        ];
    }
}
