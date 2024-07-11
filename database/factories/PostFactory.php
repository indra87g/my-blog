<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(4, true),
            'excerpt' => $this->faker->paragraph($nbSentences = 5, $variableNbSentences = true),
            'body' => $this->faker->paragraphs($nb = 8, $asText = true),
            'featured' => false,
        ];
    }
}
