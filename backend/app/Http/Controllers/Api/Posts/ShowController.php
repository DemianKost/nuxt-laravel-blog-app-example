<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Posts;

use App\Models\Post;
use App\Http\Resources\Api\PostResource;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use JustSteveKing\Launchpad\Http\Responses\ModelResponse;

final class ShowController
{
    public function __invoke(Request $request, string $ulid): Responsable
    {
        $post = Cache::remember(
            key: "posts_$ulid",
            ttl: 3600,
            callback: static fn () => Post::query()->findOrFail(
                id: $ulid
            ),
        ); 

        return new ModelResponse(
            data: new PostResource(
                resource: $post
            )
        );
    }
}
