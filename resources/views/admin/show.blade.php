@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <h2 class="text-center">{{$project->nom_projet}} <br> </h2>
        <h4 class ="text-center">Auteur : {{$project->user->name}} </h4>
        <p>Fonction: {{$project->user->fonction}}</p>
        <p>Adresse: {{$project->user->adresse}}</p>
        <p>Téléphone: {{$project->user->tel}}</p>
        <p>Email: {{$project->user->email}}</p>


        <h3 class = "text-center"> Nom et fonction du contact pour le suivi du projet avec étudiants : </h3>
        <p>Nom du contact : {{$project->name}}</p>
        <p>Fonction : {{$project->fonction}}</p>
        <p>Adresse : {{$project->adresse}}</p>
        <p>Adresse email : {{$project->email}}</p>
        <p>Numéro de téléphone : {{$project->tel}}</p>
        <br/>
        <p>Fiche d'identité : {{$project->fiche_identite}}</p>

        <h3 class = "text-center"> Descriptif du projet </h3>
        <p>Le type : @if($project->type ==1)
                Site internet
            @elseif($project->type ==2)
                3D
            @elseif($project->type ==3)
                Animations 2D
            @elseif($project->type ==4)
                Installation Multimédia
            @elseif($project->type ==5)
                Jeu vidéo
            @elseif($project->type ==6)
                DVD
            @elseif($project->type ==7)
                Print
            @elseif($project->type ==8)
                CD-ROM
            @elseif($project->type ==8)
                Evènement
            @elseif($project->type ==8)
                Autre
            @endif
        </p>
        <p>Le contexte : {{$project->contexte}}</p>
        <p>La demande : {{$project->demande}}</p>
        <p>Les objectifs : {{$project->objectif}}</p>
        <p>Les éventuelles contraintes : {{$project->contrainte}}</p>


        <a href="{{route('admin.index')}}">
            <button class="btn btn-success">Retour</button>
        </a>

    </div>
@endsection