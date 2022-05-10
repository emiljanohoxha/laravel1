<?php

namespace Database\Factories;
use App\Models\CategoryConfigurationKeys;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryConfigurationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id'=>$this->faker->numberBetween(1, 20),
            'key'=>CategoryConfigurationKeys::inRandomOrder()->first()->name,
            'type'=>$this->faker->randomElement(['integer','boolean']),
            'default'=>$this->faker->randomElement(['null']),
            'value'=>$this->faker->randomElement(['1','2','true','false','5']),
        ];
    }
}
