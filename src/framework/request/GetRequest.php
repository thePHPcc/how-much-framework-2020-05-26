<?php declare(strict_types = 1);
namespace framework;

class GetRequest extends Request {

    private string $url;

    private array $parameters;

    private array $cookies;

    public function __construct(string $url, array $parameters, array $cookies) {
        $this->url = $url;
        $this->parameters = $parameters;
        $this->cookies = $cookies;
    }

    public function url(): string {
        return $this->url;
    }

    public function parameters(): array {
        return $this->parameters;
    }

    public function cookies(): array {
        return $this->cookies;
    }

}
