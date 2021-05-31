<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //change api_token to token
        return [
            'name' => $this->name ,
            'email' => $this->email,
            'phone' => $this->phone ,
            'api_token' => $this->api_token
        ];
    }
    public function with($request){
       return ['status' => 'success' ] ;
    }
}
