<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween($min = 1, $max = 50),
            'street' => $this->faker->streetName,
            'img' => $this->faker->randomElement(['1622401783_post-7.jpg', '1622402278post-2.jpg', '1622579558post-6.jpg', '1622373997_slide-3.jpg']),
            'quart' => $this->faker->phoneNumber,
            'area' => $this->faker->numberBetween($min = 50, $max = 150),
            'registered_area' => $this->faker->numberBetween($min = 50, $max = 150),
            'window_type' => $this->faker->word,
            'water_outlets' => $this->faker->numberBetween($min = 1, $max = 3),
            'bathrooms' => $this->faker->numberBetween($min = 1, $max = 3),
            'badrooms' => $this->faker->numberBetween($min = 1, $max = 3),
            'rooms' => $this->faker->numberBetween($min = 1, $max = 3),
            'flors' => $this->faker->numberBetween($min = 5, $max = 10),
            'at_flor' => $this->faker->numberBetween($min = 1, $max = 5),
            'year' => $this->faker->numberBetween($min = 1980, $max = 2020),
            'description' => $this->faker->text($maxNbChars = 200),
            'additional_info' => $this->faker->text($maxNbChars = 200),
            'price' => $this->faker->numberBetween($min = 50000, $max = 100000),
            'category_id' => $this->faker->numberBetween($min = 1, $max = 2),
            'subcategory_id' => $this->faker->numberBetween($min = 1, $max = 2),
        ];
    }
}
