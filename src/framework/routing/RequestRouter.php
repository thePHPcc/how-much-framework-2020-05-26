<?php declare(strict_types = 1);
namespace framework;

use RuntimeException;

class RequestRouter {

    private ?Route $first = null;
    private ?Route $last = null;

    public function addRoute(Route $route): void {
        if ($this->first === null) {
            $this->first = $route;
        }
        if ($this->last !== null) {
            $this->last->setNext($route);
        }

        $this->last = $route;
    }

    public function route(Request $request): Executable {
        if ($this->first === null) {
            throw new RuntimeException('No routes set');
        }
        return $this->first->route($request);
    }
}
