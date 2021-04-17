<?php

namespace Database\Factories;

use App\Models\BudgetItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class BudgetItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BudgetItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'item_name' => $this->faker->text(30),
            'type' => $this->faker->mimeType,
            'amount' => $this->faker->numberBetween(1,50)
        ];
    }
}
