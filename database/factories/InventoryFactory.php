<?php

namespace Database\Factories;

use App\Models\Inventory;
use Illuminate\Database\Eloquent\Factories\Factory;

class InventoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Inventory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'       => $this->faker->firstNameMale,
            'img'        => 'img_inventory/inventory.jpg',
            'stock_in'   => 100,
            'price'      => 50000,
            'category_id'=> rand(1,3),
        ];
    }
}
