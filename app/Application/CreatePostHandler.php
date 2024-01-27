<?php

namespace App\Application;

use App\Domain\PostEntity;
use App\Domain\PostRepository;
use App\Application\CreatePostCommand;

class CreatePostHandler
{
    public function __construct(
        private readonly PostRepository $postRepository
    ) {
    }

    public function handle(CreatePostCommand $command): void
    {
        $postEntity = new PostEntity(
            id: null,
            title: $command->title,
            highlight: $command->highlight,
            content: $command->content,
            createdAt: null,
        );

        $this->postRepository->create($postEntity);
    }
}