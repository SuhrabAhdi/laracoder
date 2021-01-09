<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name,
            "price"=>$this->faker->numberBetween($min=100,$max=2500),
            "desc"=>$this->faker->text,
            "category_id"=>1,
            "brand_id"=>$this->faker->numberBetween($min=2,$max=3)
        ];
    }
}
