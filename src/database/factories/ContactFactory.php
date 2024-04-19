<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $contact = Contact::class;

    public function definition()
    {
        return [
        'category_id' => $this->faker->numberBetween(1,5),
        'first_name' => $this->faker->firstName(),
        'last_name' => $this->faker->lastName(),
        'gender' => $this->faker->randomElement(['男性', '女性', 'その他']),
        'email' => $this->faker->safeEmail(),
        'tell' => $this->faker->phoneNumber(),
        'address' => $this->faker->streetAddress(),
        'building' => $this->faker->secondaryAddress(),
        'detail' => $this->faker->text(120)
        ];
    }
}
