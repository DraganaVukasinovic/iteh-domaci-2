<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PozoristeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->word(), //za naziv generise random rec
            'adresa' => $this->faker->address(), //generise random adresu
            'grad' =>  $this->faker->city(), // generise random grad
       
        ];
    }
}
