<?php

namespace App\Http\Controllers;

use App\Project;

use App\Providers\Twitter;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){

        $project = Project::all();

        return view('projects.index', compact('project'));
    }


    public function create(){
        return view('projects.create');
    }


    public function show(Project $project, Twitter $twitter){
        // $project = Project::findOrFail($id);
        $twitter = app('App\Providers\Twitter');

        dd($twitter);
        
        return view('projects.show', compact('project'));
    }


    public function edit(Project $project){
        // $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }
    

    public function update(Project $project){
        
        $project->update(request(['title','description']));
        
        return redirect('/projects');
    }
    

    public function destroy(Project $project){
        
        $project->delete();
        return redirect('/projects');
    }
    
    public function store(){
        $attributes = request()->validate
        ([
            'title' => ['required','min:3','max:255'],
            'description' => ['required','min:3','max:255']
        ]);
        Project::create($attributes);

        return redirect('/projects');
    }
    
}
