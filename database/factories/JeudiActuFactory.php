<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JeudiActuFactory extends Factory
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
            "actu"=>$this->faker->name()

        ];
    }
}
