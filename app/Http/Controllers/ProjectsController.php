<?php

namespace App\Http\Controllers;

use App\Project;

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


    public function show(project $project){

        $twitter = app('twitter');
        dd($twitter);
        
        return view('projects.show', compact('project'));
    }


    public function edit($id){
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }
    

    public function update(project $project){
        
        return redirect('/projects');
    }
    

    public function destroy(project $project){
        $project->delete();
        // $project = Project::findOrFail($id)->delete();
        return redirect('/projects');
    }
    
    public function store(){
        
        $project = new Project();

        $project->title = request('title');
        $project->description = request('description');

        $project->save();
        return redirect('/projects');
    }
    // public function store(){
    //     request()->validate([
    //         'title' => ['required','min:3'],
    //         'description' => ['required','min:3']]);
    //     Project::create(request(['title','description']));
        // return redirect('/projects');
    // }
}
