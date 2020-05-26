<?php declare(strict_types = 1);
namespace framework;

interface Response {
    public function flush(): void;
}
