<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PredstavaFactory extends Factory
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
            'cena_karte' => $this->faker->numberBetween($min = 500, $max = 5000), //za cenu generise random broj od 500 do 5000
            'opis' =>  $this->faker->sentence($nbWords = 6, $variableNbWords = true), //za opis ce da nam generise random recenicu od 6 reci
            'trajanje' => $this->faker->numberBetween($min = 60, $max = 120), //za trajanje predstave generise random broj od 60 do 120 min 
       
        ];
    }
}
