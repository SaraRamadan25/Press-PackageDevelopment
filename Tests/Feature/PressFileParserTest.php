<?php

namespace SaraRamadan\Press\Tests\Feature;

use Orchestra\Testbench\TestCase;
use SaraRamadan\Press\PressFileParser;

class PressFileParserTest extends TestCase
{
    /** @test */
    public function the_head_and_body_gets_split()
    {
        $pressFileParser = (new PressFileParser(__DIR__ . '/../blogs/MarkdownFile1.md'));

        $data = $pressFileParser->getData();
        /*dd($data);*/
        $this->assertStringContainsString('title: my title', $data[1]);
        $this->assertStringContainsString('my description', $data[1]);
        $this->assertStringContainsString('Blog post here', $data[2]);

    }

    /** @test */

    public function each_head_field_gets_separated()
    {
        $pressFileParser = (new PressFileParser(__DIR__ . '/../blogs/MarkdownFile1.md'));

        $data = $pressFileParser->getData();

        $this->assertEquals('my title', $data['title']);
        $this->assertEquals('my description', $data['description']);
    }

    /** @test */

    public function the_body_gets_saved_and_trimmed()
    {
        $pressFileParser = new PressFileParser(__DIR__.'/../blogs/MarkdownFile1.md');

        $data = $pressFileParser->getData();

        $expected = "# Heading\n\nBlog post here";
        $actual = str_replace("\r", "", $data['body']);

        $this->assertEquals($expected, $actual);
    }


}