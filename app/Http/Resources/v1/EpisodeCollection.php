<?php


namespace App\Http\Resources\v1;


use Illuminate\Http\Resources\Json\ResourceCollection;

class EpisodeCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this -> collection -> map(function ($item){
                return [
                    'title' => $item -> title ,
                    'body' => $item -> body ,
                    'episode_number' => $item -> number ,
                ];
            })
        ];
    }

}
