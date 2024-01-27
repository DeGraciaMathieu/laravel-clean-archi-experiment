<?php

namespace App\Presenter\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Application\CreatePostCommand;
use App\Application\CreatePostHandler;

class CreatePostController
{
    public function __construct(
        private readonly CreatePostHandler $createPostHandler,
    ) {
    }

    public function __invoke(Request $request)
    {
        $command = new CreatePostCommand(
            title: $request->title,
            highlight: $request->highlight,
            content: $request->content,
        );

        $this->createPostHandler->handle($command);

        return Response::make(null, Response::HTTP_CREATED);
    }
}