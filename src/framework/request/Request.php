<?php declare(strict_types = 1);
namespace framework;

use RuntimeException;

abstract class Request {

    public static function fromGlobalScope(): Request {
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET': return self::createGetRequest();
            default: throw new RuntimeException('Oups..');
        }
    }

    private static function createGetRequest(): GetRequest {
        return new GetRequest(
            $_SERVER['REQUEST_URI'],
            $_GET,
            $_COOKIE
        );
    }
}
