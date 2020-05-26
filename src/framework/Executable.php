<?php declare(strict_types = 1);
namespace framework;

interface Executable {

    public function execute(): Result;
}
