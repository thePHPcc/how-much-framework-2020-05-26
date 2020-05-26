<?php declare(strict_types = 1);
namespace app;

use framework\Application;
use framework\RequestRouter;
use framework\ResultRouter;

class SampleWebsite implements Application {

    public function setupRequestRouting(RequestRouter $router): void {
        $router->addRoute(new SampleRoute());
    }

    public function setupResultRouting(ResultRouter $router): void {
        $router->addRoute(new ContentResultRoute());
    }

}
