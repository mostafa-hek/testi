<?php

namespace Database\Factories;

use App\Models\Episode;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpisodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Episode::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this-> faker -> sentence() ,
            'body' => $this-> faker -> paragraph(5) ,
            'videoUrl' => 'http://clips.vorwaerts-gmbh.de/big_buck_bunny.mp4' ,
        ];
    }
}
