<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Task;

class TaskController extends Controller
{

    public function index()
    {

        $tasks = Task::all();

        return view('tasks.index', [ 'tasks' => $tasks ] );
        
    }

    
}
