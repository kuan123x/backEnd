<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    use HasFactory;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $es = [
            'MDC Seagulls',
            'HNU Falcons',
            'BREN Esports',
            'University of Bohol',
            'NXP Evos',
        ];
        return [
            'team_name' => fake()->randomElement($es),
            'description' => implode(' ', fake()->sentences()),
            'trophies' => fake()->word(),

        ];
    }
}
