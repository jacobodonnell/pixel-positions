<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    private array $fakeLocations = ['Remote', 'Los Angeles', 'New York City', 'Chicago', 'Minneapolis', 'Seattle', 'Dallas'];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => $this->generateSalary(),
            'location' => fake()->randomElement($this->fakeLocations),
            'schedule' => fake()->randomElement([
                'Full Time', 'Full Time', 'Full Time', 'Part Time'
            ]),
            'url' => fake()->url,
            'featured' => false,
        ];
    }

    private function generateSalary(): string
    {
        $salary = number_format(round(rand(30000, 120000), -3));
        return '$' . $salary . ' USD';
    }
}
