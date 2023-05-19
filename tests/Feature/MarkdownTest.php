<?php

namespace SaraRamadan\Press\Tests;

use Orchestra\Testbench\TestCase;
use SaraRamadan\Press\MarkdownParser;

class MarkdownTest extends TestCase
{

    /** @test */
    public function simple_mark_down_is_parsed()
    {
        $this->assertEquals('<h1>Heading</h1>', MarkdownParser::parse('# Heading'));
    }
}