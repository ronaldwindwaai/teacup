<?php

namespace Database\Factories;

use App\Models\Bank;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'company_name' => $this->faker->company,
            'address' => $this->faker->address,
            'contact_number' => $this->faker->phoneNumber,
            'email_address' => $this->faker->email,
            'tax_number' => $this->faker->numerify('###-###-####'),
            'country' => $this->faker->company,
            'user_id' => $this->faker->unique()->randomElement(User::pluck('id')),
            'bank_id' => $this->faker->randomElement(Bank::pluck('id')),
        ];
    }
}
