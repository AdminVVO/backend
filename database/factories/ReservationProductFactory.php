<?php

namespace Database\Factories;

use App\Models\ReservationProduct;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class ReservationProductFactory extends Factory
{
    protected $model =ReservationProduct::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'state'=>Str::random(4),
            'guest'=>$this->faker->name(),
            'dateEntry'=>$this->faker->date('Y-m-d'),
            'dateDeparture'=>$this->faker->date('Y-m-d'),
            'dateBooking'=>$this->faker->date('Y-m-d'),
            'list'=>Str::random(4),
            'totalPay'=>'134.23',
            'supportPayment'=>'134.23',
            'reserveAmount'=>'134.23',
            'product_id'=>$this->faker->numberBetween(1,12),
        ];
    }
}
