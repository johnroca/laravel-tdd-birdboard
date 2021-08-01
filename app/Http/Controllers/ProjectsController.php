<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProjectRequest;

class ProjectsController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function store(StoreProjectRequest $request)
    {
        Project::create(request(['title', 'description']));

        return redirect()->to('/projects');
    }
}
