<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\Status;
use App\Models\Post;
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
            'title'=>$sentence = $this->faker->sentence(),
            'status'=>Status::PUBLISHED,
            'summary'=>$desc = $this->faker->text(160),
            'content'=>$this->faker->paragraph(),
            'meta' => [
                'title' =>$sentence,
                'description' =>$desc,
                'author' =>'Minnice',
            ],
        ];
    }
}
