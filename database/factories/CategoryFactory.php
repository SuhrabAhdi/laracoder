<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->company,
            "url"=>$this->faker->sentence,
            "desc"=>$this->faker->text,
            "created_at_ip"=>$this->faker->ipv4,
            "updated_at_ip"=>$this->faker->ipv4,
        ];
    }
}
