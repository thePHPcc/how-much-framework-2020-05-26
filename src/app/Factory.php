<?php declare(strict_types = 1);
namespace app;

use framework\Runner;

class Factory {

    public function createRunner(): Runner {
        return new Runner(
            new SampleWebsite()
        );
    }
}
