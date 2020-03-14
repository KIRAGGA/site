<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{

    public function store(Project $project)
    {
       $attributes = request()->validate(['description' => ['required','min:3','max:255']]);


        $project->addTask($attributes);
        
        return back();
    }

    public function update(Task $task){

        $task->completed(request()->has('completed'));
        //         $task->update([
        //     'completed' => request()->has('completed')
        // ]);
        return back();
    }
}
