<?php

namespace Database\Factories;

use App\Models\ComentarioProduct;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class ComentarioProductFactory extends Factory
{

    protected $model =ComentarioProduct::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'comment'=>Str::random(70),
            'date'=>$this->faker->date('Y-m-d'),
            'nameuser'=>$this->faker->name,
            'photouser'=>$this->faker->numberBetween(1,7).'.png',
        ];
    }
}
