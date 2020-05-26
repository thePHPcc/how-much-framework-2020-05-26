<?php declare(strict_types = 1);
namespace app;

use framework\ContentResponse;
use framework\Response;
use framework\Result;
use framework\ResultHandler;

class ContentResultHandler implements ResultHandler {

    public function handle(Result $result): Response {
        \assert($result instanceof ContentResult);
        return new ContentResponse('text/plain', $result->message());
    }

}
