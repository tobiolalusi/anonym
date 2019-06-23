<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_write_story()
    {
        $this->actingAs(factory('App\User')->create());

		$data = [
			'title' => 'Story title',
			'content' => 'Story content'
		];

        $this->post('/stories', $data);

		$this->assertDatabaseHas('stories', $data);
    }
}
