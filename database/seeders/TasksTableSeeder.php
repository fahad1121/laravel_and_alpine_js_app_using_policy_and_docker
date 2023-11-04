<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'user_id'   =>  1,
            'title' => 'Dummy Task',
            'description'   =>  'Dummy description'
        ]);

        // Seed additional tasks using a factory
        Task::factory(20)->create();
    }
}
