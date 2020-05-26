<?php declare(strict_types = 1);
namespace app;

use framework\Result;

class ContentResult implements Result {

    private string $message;

    public function __construct(string $message) {
        $this->message = $message;
    }

    public function message(): string {
        return $this->message;
    }

}
