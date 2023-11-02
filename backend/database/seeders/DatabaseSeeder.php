<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Database\Factories\UserFactory;
use http\Client\Curl\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = UserFactory::new()->create([
            'name'=>'Minnice',
            'email'=>'minnice@mai.com',
        ]);

        Post::factory()->for($user,'author')->count(30)->create();
    }
}
