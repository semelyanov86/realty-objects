<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Rating;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

final class RatingFactory extends Factory
{
    protected $model = Rating::class;

    public function definition(): array
    {
        return [
            'property_id' => $this->faker->word(),
            'ip_address' => $this->faker->ipv4(),
            'value' => $this->faker->randomFloat(1, 0, 5),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
