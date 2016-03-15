@extends('layouts.app')

@section('content')

    <h2>{{$project->nom_projet}} <br> Auteur: {{$project->user->name}} </h2>
    <p>{{$project->demande}}</p>

    <a href="{{route('projet.index')}}">
        <button class="btn btn-success">Retour</button>
    </a>
@endsection