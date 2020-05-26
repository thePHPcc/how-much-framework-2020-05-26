<?php declare(strict_types = 1);
namespace app;

use framework\Executable;
use framework\GetRouteTemplate;
use framework\Request;
use framework\Route;

class SampleRoute extends GetRouteTemplate {

    protected function matches(Request $request): bool {
        return true;
    }

    protected function createExectuable(): Executable {
        return new SampleExecutable();
    }

}
