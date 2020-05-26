<?php declare(strict_types = 1);
namespace framework;

class ContentResponse implements Response {

    private string $mimetype;
    private string $content;

    public function __construct(string $mimetype, string $content) {
        $this->mimetype = $mimetype;
        $this->content = $content;
    }

    public function flush(): void {
        \header(sprintf('Content-Type: %s', $this->mimetype ));
        printf("%s\n", $this->content);
    }
}
