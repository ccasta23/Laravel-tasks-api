<?php

namespace Database\Factories;

use App\Http\Controllers\TaskController;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(100),
            'slug' => $this->faker->slug,
            'description' => $this->faker->text,
            'deadline' => $this->faker->dateTime,
            'is_done' => $this->faker->boolean
        ];
    }
}
