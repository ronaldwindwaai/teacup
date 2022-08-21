<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'invoice_number' => $this->faker->numerify('###-###-####'),
            'invoice_date' => $this->faker->date,
            'vat' => $this->faker->randomFloat(8,0,2),
            'sub_total' => $this->faker->randomFloat(8,0,2),
            'discount' => $this->faker->randomFloat(8,0,2),
            'total' => $this->faker->randomFloat(8,0,2),
            'supplier_id' => $this->faker->randomElement(Supplier::pluck('id')),
            'status' => $this->faker->randomElement([
                'submitted',
                'processing',
                'processed',
                'rejected']),
            'status_message' => $this->faker->sentence(),
            'paid_date' => $this->faker->date,
            'file_url' => $this->faker->randomAscii.'.pdf',
        ];
    }
}
