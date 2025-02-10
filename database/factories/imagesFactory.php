<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\images>
 */
class imagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $noteable = [
            \App\Models\User::class,
            \App\Models\taskModel::class
        ];
        $model = $this->faker->randomElement($noteable);

        return [
            'url' => $this->faker->imageUrl($width = 550, $height = 550),
            'imagable_type' => $model, // Store the class name
            'imagable_id' => $model::query()->inRandomOrder()->value('id') ?? 1 // Random ID or fallback to 1
        ];
    }
}
