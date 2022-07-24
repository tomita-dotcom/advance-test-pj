<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contactform;

class ContactformFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'family_name' => $this->faker->firstName,
            'last_name' => $this-> faker->lastName,
            'gender' => $this-> faker->boolean,
            'email' => $this->faker->safeEmail(),
            'postcode' => $this->substr_replace(faker->postcode(), '-', 3, 0),
            'address' => $this->faker->streetAddress,
            'building_name' => $this->faker->word(),
            'opinion' => $this->faker->text,
        ];
    }
}
