<?php declare(strict_types = 1);
namespace server;

use app\Factory;
use framework\Request;

require __DIR__ . '/src/autoload.php';

(new Factory())->createRunner()->run(
    Request::fromGlobalScope()
)->flush();


