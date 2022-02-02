<?php

namespace Database\Factories;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class ProductFactory extends Factory
{


    protected $model =Product::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'cod'=>Str::random(4),
            'name'=>$this->faker->name(),
            'numBath'=>$this->faker->numberBetween(1,3),
            'numRoom'=>$this->faker->numberBetween(1,3),
            'numBalneario'=>$this->faker->numberBetween(1,3),
            'location'=>$this->faker->address(),
            'description'=>Str::random(40),
            'linkPersonal'=>Str::random(40),
            'language'=>Str::random(4),
            'listStatus'=>Str::random(4),
            'amenities'=>Str::random(4),
            'security'=>Str::random(4),
            'outstandingService'=>[
                0 => Str::random(4),
                1 => Str::random(4),
                2 => Str::random(4),
            ],
            'favorite'=>[
                0 => Str::random(4),
                1 => Str::random(4),
                2 => Str::random(4),
            ],
            'alarm'=>[
                0 => Str::random(4),
                1 => Str::random(4),
                2 => Str::random(4),
            ],
            'imgUrl'=>[
                0 => $this->faker->numberBetween(1,10).'.jpg',
                1 => $this->faker->numberBetween(1,10).'.jpg',
                2 => $this->faker->numberBetween(1,10).'.jpg',
            ],
            'category_id'=>$this->faker->numberBetween(1,3),
            'type_id'=>$this->faker->numberBetween(1,3),
            'description_id'=>$this->faker->numberBetween(1,3),
            'typespace_id'=>$this->faker->numberBetween(1,3),
        ];
    }
}
