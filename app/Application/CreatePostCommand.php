<?php

namespace App\Application;

readonly class CreatePostCommand
{
    public function __construct(
        public string $title,
        public string $highlight,
        public string $content,
    ) {
    }
}