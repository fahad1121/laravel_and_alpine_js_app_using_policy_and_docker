<?php

namespace App\Http\Controllers;

use App\Models\Task;


class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with('User')->get();

     return view('welcome',compact('tasks'));
    }
}
