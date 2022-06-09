<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InvitationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->email(),
            'event_id'=>$this->faker->numberBetween(1,50)
        ];
    }
}
