<?php declare(strict_types = 1);
namespace framework;

interface Route {
    public function setNext(Route $route): void;

    public function route(Request $request): Executable;
}
