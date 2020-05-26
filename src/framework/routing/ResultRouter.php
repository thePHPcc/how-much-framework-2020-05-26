<?php declare(strict_types = 1);
namespace framework;

use RuntimeException;

class ResultRouter {

    private ?ResultRoute $first = null;
    private ?ResultRoute $last = null;

    public function addRoute(ResultRoute $route): void {
        if ($this->first === null) {
            $this->first = $route;
        }
        if ($this->last !== null) {
            $this->last->setNext($route);
        }

        $this->last = $route;
    }

    public function route(Result $result): ResultHandler {
        if ($this->first === null) {
            throw new RuntimeException('No routes set');
        }
        return $this->first->route($result);
    }
}
