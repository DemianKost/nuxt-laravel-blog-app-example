<?php

declare(strict_types=1);

namespace App\Http\Resources\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use TiMacDonald\JsonApi\JsonApiResource;

/**
 * @property-read Post $resource
 */
final class PostResource extends JsonApiResource
{
    public function toAttributes(Request $request): array
    {
        return [
            'title' => $this->resource->title,
            'status' => $this->resource->status,
            'summary' => $this->resource->summary,
            'content' => $this->resource->content,
            'meta' => $this->resource->meta,
        ];
    }
}
