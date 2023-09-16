<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Ferry;
use App\Reservation;
use App\Task;
use App\Type;
use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Task>
 */
final class TaskFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */
    protected $model = Task::class;

    /**
    * Define the model's default state.
    *
    * @return array
    */
    public function definition(): array
    {
        return [
            'status' => (int) fake()->boolean,
        ];
    }
}
