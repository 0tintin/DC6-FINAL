<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'firstName' => $this->faker->unique()->firstName,
            'lastName' => $this->faker->unique()->lastName,
            'position' => $this->faker->randomElement(['Crew Member','Cashier','Cook','Assistant Manager','Store Manager','Maintenance Technician','Drive-Thru Operator','Trainer','Marketing Coordinator']),
            'dateOfBirth' => $this->faker->dateTimeThisCentury,
            'hireDate' => $this->faker->dateTimeThisDecade,
       
        ];
    }
}
