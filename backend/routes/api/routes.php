<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::prefix('posts')->as('posts:')->group(
    base_path('routes/api/posts.php'),
);