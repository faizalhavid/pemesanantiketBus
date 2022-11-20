<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemesan>
 */
class PemesanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name(),
            'alamat' => fake()->address(),
            'no_tlp' => fake()->phoneNumber(),
            'jumlah_tiket' => fake()->randomNumber(),
        ];
    }
}
