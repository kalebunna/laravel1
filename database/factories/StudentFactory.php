<?php

namespace Database\Factories;

use Carbon\Factory as CarbonFactory;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Studen>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $fake = FakerFactory::create();
        return [
            "name" => $fake->name(3),
            "jenis_kelamin" => Arr::random(["L", "P"]),
            "address" => $fake->address(),
            "nis" => mt_rand(12345, 98272),
            "kelas_id" => Arr::random([1, 2, 3])
        ];
    }
}
