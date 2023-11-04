<?php

namespace Tests\Feature;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A task creation test.
     */

    public function create()
    {
        $task = Task::factory()->create([
            'user_id'   => 1,
           'title'  =>  fake()->sentence,
           'description' => fake()->paragraph
        ]);

        $this->assertDatabaseHas('tasks', [
            'user_id'   => 1,
            'title'  =>  fake()->sentence,
            'description' => fake()->paragraph
        ]);
    }
}
