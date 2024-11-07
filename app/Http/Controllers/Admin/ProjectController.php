<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    public function show(string $id) {
        $project = Project::findOrFail($id);
        return view('admin.projects.show', compact('project'));
    }

    public function create() {
        $types = Type::all();
        return view('admin.projects.create', compact('types'));
    }

    public function store(Request $request) {
        $new_project = Project::create($request->all());
        return redirect()->route('admin.projects.show', ['id' => $new_project->id]);

    }

    public function edit(string $id) {
        $editing_project = Project::findOrFail($id);
        $types = Type::all();
        return view('admin.projects.edit', compact('editing_project', 'types'));
    }

    public function update(Request $request, string $id) {
        $edited_project_data = $request->all();
        $editing_project = Project::findOrFail($id);
        $editing_project->update($edited_project_data);
        return redirect()->route('admin.projects.show', ['id' => $editing_project->id]);
    }

    public function destroy(string $id) {
        $deleting_project = Project::findOrFail($id);
        $deleting_project->delete();
        return redirect()->route('admin.projects.index');
    }
}
