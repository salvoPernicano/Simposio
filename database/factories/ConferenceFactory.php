<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conference>
 */
class ConferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $startsAt = now()->addMonths(6);
        $endsAt = $startsAt->clone()->addDays(3);
        $cpfStartsAt = $startsAt->clone()->subMonths(4);
        $cpfEndsAt = $cpfStartsAt->clone()->addMonths(2);

        return [
            'title' => fake()->country() . ' Conference',
            'location' => fake()->address(),
            'description' => fake()->realText(),
            'url' => fake()->url(),
            'starts_at' => $startsAt,
            'ends_at' => $endsAt,
            'cpf_starts_at' => $cpfStartsAt,
            'cpf_ends_at' => $cpfEndsAt,
        ];
    }
}
