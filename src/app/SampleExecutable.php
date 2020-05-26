<?php declare(strict_types = 1);
namespace app;

use framework\Executable;
use framework\Result;

class SampleExecutable implements Executable {

    public function execute(): Result {
        return new ContentResult(
            'Hello world'
        );
    }
}
