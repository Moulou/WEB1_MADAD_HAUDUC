@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h2 class="text-center">{{$project->nom_projet}} <br> Auteur : {{$project->user->name}} </h2>


    <h3 class = "text-center"> Nom et fonction du contact pour le suivi du projet avec étudiants : </h3>
    <p>Nom du contact : {{$project->name}}</p>
    <p>Fonction : {{$project->fonction}}</p>
    <p>Adresse : {{$project->adresse}}</p>
    <p>Adresse email : {{$project->email}}</p>
    <p>Numéro de téléphone : {{$project->tel}}</p>
    <br/>
    <p>Fiche d'identité : {{$project->fiche_identite}}</p>

    <h3 class = "text-center"> Descriptif du projet </h3>
    <p>Le type : {{$project->type}}</p>
    <p>Le contexte : {{$project->contexte}}</p>
    <p>La demande : {{$project->demande}}</p>
    <p>Les objectifs : {{$project->objectif}}</p>
    <p>Les éventuelles contraintes : {{$project->contrainte}}</p>


    <a href="{{route('projet.index')}}">
        <button class="btn btn-success">Retour</button>
    </a>

</div>
@endsection