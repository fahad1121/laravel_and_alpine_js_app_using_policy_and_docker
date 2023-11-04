<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create([
            'user_id'   =>  1,
            'comment'   =>  fake()->paragraph
        ]);

        Comment::factory(20)->create();
    }
}
