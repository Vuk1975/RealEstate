<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'property_id' => $this->faker->unique()->numberBetween(1, 100),
            'pathName' => '["1622846127_slide-3.jpg","1622846127_slide-2.jpg","1622846127_slide-1.jpg","1622846127_post-single-1.jpg"]'
        ];
    }

}
