<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Users>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_versi' => mt_rand(1, 2),
            'id_shortlink' => mt_rand(1, 10),
            'username' => $this->faker->words(10),
            'ip' => "123.456.43.2",
            'userAgent' => $this->faker->words(1),
            'expiredToken' => mt_rand(5, 20),
            'count' => 1,
            'created_at' => date('H:i:s')
        ];
    }
}
