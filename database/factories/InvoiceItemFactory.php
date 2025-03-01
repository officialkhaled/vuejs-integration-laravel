<?php

namespace Database\Factories;

use App\Models\InvoiceItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceItemFactory extends Factory
{
    protected $model = InvoiceItem::class;

    public function definition(): array
    {
        return [
            'invoice_id' => $this->faker->numberBetween(100, 1000),
            'product_id' => $this->faker->numberBetween(10, 100),
            'unit_price' => $this->faker->numberBetween(100, 5000),
            'quantity' => $this->faker->numberBetween(1, 10),
        ];
    }
}
