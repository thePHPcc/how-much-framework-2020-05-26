<?php declare(strict_types = 1);
namespace app;

use framework\Executable;
use framework\Request;
use framework\Result;
use framework\ResultHandler;
use framework\ResultRouteTemplate;

class ContentResultRoute extends ResultRouteTemplate {

    protected function matches(Result $result): bool {
        return $result instanceof ContentResult;
    }

    protected function createHandler(Result $result): ResultHandler {
        return new ContentResultHandler();
    }

}
