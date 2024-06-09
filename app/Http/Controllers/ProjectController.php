<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('id', 'Asc')->get();
        return view('projects.index')->with(compact('projects'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $project = Project::create($data);

        return Response::json($project);
    }
}
