<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'logo' => $this->generateImage(),
            'user_id' => User::factory()
        ];
    }

    private function generateImage(): string
    {
        return 'https://picsum.photos/seed/' . str(rand(0, 10000)) . '/100';
    }
}
