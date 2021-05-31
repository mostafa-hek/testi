<?php


namespace App\Http\Resources\v1;

use App\Http\Resources\v1\Course;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CourseCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            "data"=> $this->collection->map(function ($item){
                return  [
                    'title' => $item -> title ,
                    'body' => $item -> body ,
                    'image' => $item -> image ,
                ] ;
            })
        ];
    }
    public function with($request)
    {
        return [
            'status' => 'success'
        ] ;
    }

}
