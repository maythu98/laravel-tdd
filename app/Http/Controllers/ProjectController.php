<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function show()
    {
        $project = Project::findOrFail(request('id'));

        return view('projects.show', compact('project'));
    }


    public function store() {
        
        $data = request()->validate(['title' => 'required', 'description' => 'required']);

        Project::create($data);

        return redirect('/projects');
    }
}
