<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => Customer::factory()->create()->id,
            'status' => 'shipped',
            'shipped' => $this->faker->date(),
        ];
    }
}
