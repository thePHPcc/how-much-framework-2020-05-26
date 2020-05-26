<?php declare(strict_types = 1);
namespace framework;

use app\SampleRoute;

class Runner {

    private Application $application;

    public function __construct(Application $application) {
        $this->application = $application;
    }

    public function run(Request $request): Response {
        $router = new RequestRouter();
        $this->application->setupRequestRouting($router);

        $result = $router->route($request)->execute();

        $resultRouter = new ResultRouter();
        $this->application->setupResultRouting($resultRouter);

        return $resultRouter->route($result)->handle($result);
    }
}
