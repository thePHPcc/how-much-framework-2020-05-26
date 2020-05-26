<?php declare(strict_types = 1);
namespace framework;

interface ResultHandler {
    public function handle(Result $result): Response;
}
