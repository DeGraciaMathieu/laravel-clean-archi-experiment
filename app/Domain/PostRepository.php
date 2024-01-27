<?php

namespace App\Domain;

use App\Domain\PostEntity;

interface PostRepository
{
    public function create(PostEntity $postEntity): void;
}