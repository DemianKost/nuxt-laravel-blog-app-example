<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Test',
            'email' => 'test@example.com'
        ]);

        $post = Post::factory()->for($user, 'author')->count(30)->create();
    }
}
