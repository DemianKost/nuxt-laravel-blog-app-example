<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Posts;

use App\Models\Post;
use App\Http\Resources\Api\PostResource;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use JustSteveKing\Launchpad\Http\Responses\CollectionResponse;

final class IndexController
{
    public function __invoke(Request $request): Responsable
    {
        return new CollectionResponse(
            data: PostResource::collection(
                resource: Post::all()
            )
        );
    }
}