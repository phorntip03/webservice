<?php

namespace Database\Factories;
use App\Models\Province;
use App\Models\Title;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title_id' => Title::InRandomOrder()->first()->id,
            'name'=>$this->faker->name(),
            'lastname'=>$this->faker->lastName(),
            'email'=>$this->faker->email(),
            'province_id'=>Province::InRandomOrder()->first()->id,
            'created_at'=>now(),
        ];
    }
}
