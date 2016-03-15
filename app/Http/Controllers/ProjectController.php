<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Retourne tout les projets

        $projects = Project::all();
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
        $projet = new Project;

        $projet->user_id  = $request->user_id;
        $projet->nom_projet = $request->nom_projet;
        $projet->name  = $request->name;
        $projet->fonction  = $request->fonction;
        $projet->adresse  = $request->adresse;
        $projet->email  = $request->email;
        $projet->tel  = $request->tel;
        $projet->fiche_identite  = $request->fiche_identite;
        $projet->type  = $request->type;
        $projet->contexte  = $request->contexte;
        $projet->demande  = $request->demande;
        $projet->objectif  = $request->objectif;
        $projet->contrainte  = $request->contrainte;



        $projet->save();

        return redirect()
            ->route('projet.show', $projet->id)
            ->with(compact('post'));

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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}
