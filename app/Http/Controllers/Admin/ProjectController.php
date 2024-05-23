<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use App\Functions\Helper;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.store');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        // prima di inserire un nuovo progetto, devo verificare che non sia già presente
        // dump($request->all());
        $form_data = $request->all();
        $exist = Project::where('title', $form_data['title'])->first();
        // Se esiste ritorno alla index con un messaggio di errore
        if ($exist) {
            return redirect()->route('admin.projects.index')->with('error', 'Il progetto esiste già');
            // Se NON esiste la salvo e ritorno alla index con messaggio di success
        } else {
            $new_project = new Project();
            $form_data['slug'] = Helper::createSlug($form_data['title'], Project::class);

            $new_project->fill($form_data);
            $new_project->save();

            return redirect()->route('admin.projects.index')->with('success', 'Progetto inserito correttamente');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $form_data = $request->all();

        $exist = Project::where('title', $form_data['title'])->first();

        if ($exist) {
            return redirect()->route('admin.projects.index')->with('error', 'Progetto già esistente');
        } else {
            if ($form_data['title'] === $project->title) {
                $form_data['slug'] = $project->slug;
            } else {
                $form_data['slug'] = Helper::createSlug($form_data['title'], Project::class);
            }
        }

        $project->update($form_data);

        return redirect()->route('admin.projects.index', $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Il progetto è stato cancellato con successo.');
    }
}
