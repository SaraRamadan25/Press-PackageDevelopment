<?php

namespace SaraRamadan\Press\Tests\Feature;

use Orchestra\Testbench\TestCase;
use SaraRamadan\Press\PressFileParser;

class PressFileParserTest extends TestCase
{
    /** @test */
    public function the_head_and_body_gets_split()
    {
        $pressFileParser = (new PressFileParser(__DIR__.'/../blogs/MarkdownFile1.md'));

        $data = $pressFileParser->getData();
/*dd($data);*/
        $this->assertStringContainsString('title: my title', $data[1]);
        $this->assertStringContainsString('my description', $data[1]);
        $this->assertStringContainsString('Blog Post here', $data[2]);

    }
}