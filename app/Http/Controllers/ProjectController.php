<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
        $this->middleware('Administrateur', ['only'=> ['admin.index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retourne tout les projets

        $projects = Project::orderby('created_at', 'DESC')->get();
        return view('projet.index')->with(compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $users = User::all()->lists('name', 'id');
        $type = Project::all()->lists('type');

        return view('projet.create')->with(compact('users', 'type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ValidateProjectRequest $request)
    {
        //
        $project = new Project;

        $project->user_id  = $request->user_id;
        $project->nom_projet = $request->nom_projet;
        $project->name  = $request->name;
        $project->fonction  = $request->fonction;
        $project->adresse  = $request->adresse;
        $project->email  = $request->email;
        $project->tel  = $request->tel;
        $project->fiche_identite  = $request->fiche_identite;
        $project->type  = $request->type;
        $project->contexte  = $request->contexte;
        $project->demande  = $request->demande;
        $project->objectif  = $request->objectif;
        $project->contrainte  = $request->contrainte;



        $project->save();

        return redirect()
            ->route('projet.show', $project->id)
            ->with(compact('project'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        try{

            $project = Project::findOrFail($id);
            return view('projet.show')->with(compact('project'));

        }catch(\Exception $e){
            return redirect()->route('projet.index')->with(['erreur' => 'Projet introuvable']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $project = Project::find($id);
        $users  = User::all()->lists('name', 'id');
        $type   = Project::all()->lists('type');

        return view('projet.edit')->with(compact('project', 'users', 'type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\ValidateProjectRequest $request, $id)
    {
        //
        $project = Project::find($id);

        $project->user_id  = $request->user_id;
        $project->nom_projet = $request->nom_projet;
        $project->name  = $request->name;
        $project->fonction  = $request->fonction;
        $project->adresse  = $request->adresse;
        $project->email  = $request->email;
        $project->tel  = $request->tel;
        $project->fiche_identite  = $request->fiche_identite;
        $project->type  = $request->type;
        $project->contexte  = $request->contexte;
        $project->demande  = $request->demande;
        $project->objectif  = $request->objectif;
        $project->contrainte  = $request->contrainte;

        /* $post->user_id = $request->user_id;*/

        $project->update();

        return redirect()->route('projet.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $project = Project::find($id);
        $project->delete();


        return redirect()->route('projet.index');
    }
}
