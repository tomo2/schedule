<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // 今月分の日時を指定
        $dummyDate = $this->faker->dateTimeThisMonth;

        return [
            'name' => $this->faker->name,
            'information' => $this->faker->realText,
            'care' => $this->faker->numberBetween(1, 5),
            'start_date' => $dummyDate->format('Y-m-d H:i:s'),
            'end_date' => $dummyDate->modify('+1hour')->format('Y-m-d H:i:s')
        ];
    }
}
