<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bank>
 */
class BankFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'bank_name' => $this->faker->company,
            'account_number' => $this->faker->numerify('###-###-####'),
            'branch_code' => $this->faker->numerify('####'),
            'country' => $this->faker->country,
        ];
    }
}
