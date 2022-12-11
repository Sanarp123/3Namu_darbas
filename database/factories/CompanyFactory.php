<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'code' => $this->faker->numberBetween(11111,99999),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'zipcode' => $this->faker->postcode(),

        ];
    }
}
