<?php declare(strict_types = 1);
namespace framework;

use RuntimeException;

abstract class GetRouteTemplate implements Route {

    private ?Route $next;

    public function setNext(Route $route): void {
        $this->next = $route;
    }

    public function route(Request $request): Executable {
        if (!$this->matches($request)) {
            return $this->tryNext($request);
        }

        return $this->createExectuable();
    }

    private function tryNext(Request $request): Executable {
        if ($this->next === null) {
            throw new RuntimeException('No next route set');
        }

        return $this->next->route($request);
    }

    abstract protected function matches(Request $request): bool;

    abstract protected function createExectuable(): Executable;

}
