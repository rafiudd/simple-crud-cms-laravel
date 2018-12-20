<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class CompletedTaskController extends Controller
{
    public function store(Task $task)
    {
        $task->complete();

        return back();
    }


    public function destroy(Task $task)
    {
        $task->incomplete();

        return back();
    }
}
