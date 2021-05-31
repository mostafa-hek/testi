<?php


namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;
use Morilog\Jalali\Jalalian;

class Course  extends JsonResource
{
    /**
     * @var mixed
     */


    public function toArray($request)
    {
        return [
            'title' => $this-> title ,
            'body' => $this-> body ,
            'price' => $this -> price ,
            'image' => $this -> image ,
          //  'createTime' => Jalalian::forge($this -> created_at)->format('datetime') ,
            'createTime' => Jalalian::forge($this -> created_at)->format('%B %d، %Y') ,
            'episodes' => new EpisodeCollection($this -> episodes),
        ] ;
    }

}
$date = Jalalian::forge('last sunday')->getTimestamp();
