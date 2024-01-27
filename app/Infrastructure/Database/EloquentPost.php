<?php

namespace App\Infrastructure\Database;

use App\Domain\PostEntity;
use App\Domain\PostRepository;
use App\Infrastructure\Database\Models\Post;

class EloquentPost implements PostRepository
{
    public function __construct(
        private readonly Post $post,
    ) {
    }

    public function create(PostEntity $postEntity): void
    {
        $this->post->create([
            'title' => $postEntity->title,
            'highlight' => $postEntity->highlight,
            'content' => $postEntity->content,
            'createdAt' => $postEntity->createdAt,
        ]);
    }
}