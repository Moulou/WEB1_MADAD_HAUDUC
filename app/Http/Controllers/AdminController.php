<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('Administrateur', ['only' => ['admin']]);
    }

    public function index()
    {
        $projects = Project::orderBy('created_at', 'DESC')->get();
        return view('admin.index')->with(compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $project = new Project;
        $project->etat = 1;
        $project->user_id  = Auth::user()->id;
        $project->nom_projet = $request->nom_projet;
        $project->name  = $request->name;
        $project->fonction  = $request->fonction;
        $project->adresse  = $request->adresse;
        $project->email  = $request->email;
        $project->tel  = $request->tel;
        $project->fiche_identite  = $request->fiche_identite;
        if($request->type == "site") {
            $project->type  = 1;
        }elseif($request->type == "3d"){
            $project->type  = 2;
        }elseif($request->type == "2d"){
            $project->type  = 3;
        }elseif($request->type == "multi"){
            $project->type  = 4;
        }elseif($request->type == "jeu"){
            $project->type  = 5;
        }elseif($request->type == "dvd"){
            $project->type  = 6;
        }elseif($request->type == "print"){
            $project->type  = 7;
        }elseif($request->type == "CD"){
            $project->type  = 8;
        }elseif($request->type == "evenement"){
            $project->type  = 9;
        }elseif($request->type == "Autre"){
            $project->type  = 10;
        }
        $project->contexte  = $request->contexte;
        $project->demande  = $request->demande;
        $project->objectif  = $request->objectif;
        $project->contrainte  = $request->contrainte;



        $project->save();

        return redirect()
            ->route('admin.show', $project->id)
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
            return view('admin.show')->with(compact('project'));

        }catch(\Exception $e){
            return redirect()->route('admin.index')->with(['erreur' => 'Projet introuvable']);
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

        return view('admin.edit')->with(compact('project', 'users', 'type'));
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

        return redirect()->route('admin.show', $project->id);
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


        return redirect()->route('admin.index');
    }
}
