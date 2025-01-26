<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskApiTest extends TestCase
{
    public function test_task_creation() {
        $response = $this->postJson('/api/tasks', [
            'title' => 'Sample Task',
            'description' => 'Task Description',
        ]);

        $response->assertStatus(201)
            ->assertJsonStructure(['id', 'title', 'description', 'created_at', 'updated_at']);
    }

}
