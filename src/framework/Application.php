<?php declare(strict_types = 1);
namespace framework;

interface Application {

    public function setupRequestRouting(RequestRouter $router): void;

    public function setupResultRouting(ResultRouter $router): void;
}
