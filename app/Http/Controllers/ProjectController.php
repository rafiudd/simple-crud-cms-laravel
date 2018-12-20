<?php

namespace App\Http\Controllers;

use App\Project;
use App\Services\Twitter;
use Illuminate\Filesystem\Filesystem;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::all();

        return view('projects.index', compact('project'));
    }


    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        Project::create(
            request()->validate([
                'title'       => ['required', 'min:3'],
                'description' => ['required', 'min:3']
            ])
        );
        return redirect('/projects');
    }


    public function show(Project $project, Twitter $twitter)
    {


        dd($twitter);


        return view('projects.show', compact('project'));
    }


    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));   
    }


    public function update(Project $project)
    {
        $project->update(request([
            'title',
            'description'
        ]));

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }
}
