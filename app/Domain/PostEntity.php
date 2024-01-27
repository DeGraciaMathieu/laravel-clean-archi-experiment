<?php

namespace App\Domain;

use DateTimeImmutable;

readonly class PostEntity
{
    public function __construct(
        public ?int $id = null,
        public string $title,
        public string $highlight,
        public string $content,
        public ?DateTimeImmutable $createdAt,
    ) {
    }
}