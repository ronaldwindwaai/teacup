<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\localPurchasingOrder>
 */
class LocalPurchasingOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'lpo_number' => $this->faker->randomDigit(),
            'project_id' => $this->faker->randomElement(Project::pluck('id')),
            'invoice_id' => $this->faker->randomElement(Invoice::pluck('id')),
            'requested_by_user_id' => $this->faker->randomElement(User::pluck('id')),
            'approved' => $this->faker->boolean,
            'primary_approval_user_id' => $this->faker->randomElement(User::pluck('id')),
            'secondary_approval_user_id' => $this->faker->randomElement(User::pluck('id')),
        ];
    }
}
