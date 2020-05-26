<?php declare(strict_types = 1);
namespace framework;

use RuntimeException;

abstract class ResultRouteTemplate implements ResultRoute {

    private ?ResultRoute $next;

    public function setNext(ResultRoute $route): void {
        $this->next = $route;
    }

    public function route(Result $result): ResultHandler {
        if (!$this->matches($result)) {
            return $this->tryNext($result);
        }

        return $this->createHandler($result);
    }

    private function tryNext(Result $result): ResultHandler {
        if ($this->next === null) {
            throw new RuntimeException('No next route set');
        }

        return $this->next->route($result);
    }

    abstract protected function matches(Result $result): bool;

    abstract protected function createHandler(Result $result): ResultHandler;

}
