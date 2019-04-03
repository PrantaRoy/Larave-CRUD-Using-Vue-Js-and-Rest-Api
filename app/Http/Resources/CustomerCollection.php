<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CustomerCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' =>$this->collection->transform(function ($customer){
                return[
                    'Name'=> $customer->name,
                    'Email'=> $customer->email,
                    'Cell'=> $customer->phone,
                    'Address'=> $customer->address,
                    'Blood'=> $customer->blood,
                    'Desigination'=> $customer->desigination,
                    'Salary'=> $customer->salary,

                ];



            })

        ];
    }
}
