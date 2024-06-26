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
            'care' => $this->faker->numberBetween(1, 5),
            'date' => $dummyDate->format('Y-m-d'),
            'start_time' => $dummyDate->format('H:i:s'),
            'end_time' => $dummyDate->modify('+3hour')->format('H:i:s'),
            'price' => $this->faker->numberBetween(3944, 4137, 6078, 6288, 7021, 7139),
            'user_id' => $this->faker->numberBetween(1, 5),

        ];
    }
}
