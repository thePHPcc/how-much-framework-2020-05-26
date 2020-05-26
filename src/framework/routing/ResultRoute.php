<?php declare(strict_types = 1);
namespace framework;

interface ResultRoute {
    public function setNext(ResultRoute $route): void;

    public function route(Result $result): ResultHandler;
}
