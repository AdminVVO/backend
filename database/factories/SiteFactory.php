<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'image'=>'/products'.$this->faker->image('public/storage/products',	706 , 414,null,false)
            // imageUrl($width = 640, $height = 480)
        ];
    }
}
