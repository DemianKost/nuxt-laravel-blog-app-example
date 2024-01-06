<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Post;
use App\Enums\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
final class PostFactory extends Factory
{
    protected $model = Post::class;
    
    public function definition(): array
    {
        return [
            'title' => $sentence = $this->faker->sentence(),
            'status' => Status::PUBLISHED,
            'summary' => $description = $this->faker->text(160),
            'content' => $this->faker->paragraphs(
                nb: $this->faker->numberBetween(
                    int1: 5,
                    int2: 10
                ),
                asText: true
            ),
            // 'meta' => [
            //     'title' => $sentence,
            //     'description' => $description,
            //     'author' => 'Spongebob'
            // ]
        ];
    }
}
