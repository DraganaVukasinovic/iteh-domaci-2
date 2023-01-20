<?php

namespace Database\Factories;

use App\Models\Pozoriste;
use App\Models\Predstava;
use Illuminate\Database\Eloquent\Factories\Factory;

class IzvodjenjeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    //1
    //2
    //3
    //...
    //10
    public function definition()
    {
        return [
            'datum' => $this->faker->date($format = 'Y-m-d', $max = 'now'), //uzimamo random datum
            'pozoriste' => $this->faker->numberBetween($min = 1, $max = Pozoriste::count()), //uzima jedno od pozorista koje cuvamo u bazi
            'predstava' => $this->faker->numberBetween($min = 1, $max = Predstava::count()) //uzima jednu predstavu koju cuvamo u bazi 
       
        ];
        //na ovaj nacin smo napravili izvodjenje random predstave u random pozoristu na random dan
    }
}
