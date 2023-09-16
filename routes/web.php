<?php

use App\Http\Controllers\TaskController;
use App\Task;

// test fails
Route::get('tasks', [TaskController::class, 'index'])->name('tasks.index');

// test passes
// Route::view('tasks', 'tasks.index', ['tasks' => Task::all()])->name('tasks.index');