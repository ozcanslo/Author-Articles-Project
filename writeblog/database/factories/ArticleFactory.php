<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Article::class;
    public function definition()
    {
        return [
            'id' => $this->faker->randomKey(),
            'title' => $this->faker->title(),
            'image' => 'https://picsum.photos/seed/picsum/200/100',
            'content' => $this->faker->text(),
            'hit' => $this->faker->randomNumber(),
            'slug' => $this->faker->text(),
        ];
    }
}
