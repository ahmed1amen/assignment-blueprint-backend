<?php
namespace Database\Factories;
use App\Models\Member;
use App\Models\Quiz;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MemberQuiz>
 */
class MemberQuizFactory extends Factory
{
   
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'score' => fake()->numberBetween(1, 100),
            'time_taken' => fake()->optional(0.7)->numberBetween(1, 180), //MINUTES
            'total_attempts' => fake()->optional(0.7)->numberBetween(1, 50), 
            'is_successful' => fake()->optional(0.5)->boolean, 
            'member_id' => Member::inRandomOrder()->first()->id,
            'quiz_id' => Quiz::inRandomOrder()->first()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
    
}
