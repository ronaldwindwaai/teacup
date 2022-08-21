<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InvoiceItem>
 */
class InvoiceItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition()
    {
        return [
            'item_description' => $this->faker->text,
            'unit_price' => $this->faker->randomFloat(8,0,2),
            'quantity' => $this->faker->randomDigit(),
            'invoice_id' => $this->faker->randomElement(Invoice::pluck('id')),
        ];
    }
}
