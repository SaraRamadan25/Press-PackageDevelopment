<?php
namespace SaraRamadan\Press\Tests\Feature;

use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Orchestra\Testbench\TestCase;
use SaraRamadan\Press\Post;
use SaraRamadan\Press\PressFileParser;

class savePostsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_post_can_be_created_with_the_factory()
    {
        $post = Post::factory()->create();

        $this->assertCount(1, Post::all());
    }
}