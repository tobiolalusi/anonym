<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WriteTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_write()
    {
        $this->actingAs(factory('App\User')->create());

		$data = [
			'title' => 'Write title',
			'content' => 'Write content'
		];

        $this->post('/writes', $data);

		$this->assertDatabaseHas('writes', $data);
    }
}
