@extends('layouts.app')

@section('content')



    @foreach($projects as $project)
        <h3>{{$project->nom_projet}}</h3>
        <p>{{$project->name}}</p>
        <p>{{$project->fonction}}</p>
        <p>{{$project->adresse}}</p>
        <p>{{$project->email}}</p>
        <p>{{$project->tel}}</p>
        <p>{{$project->user_id}}</p>
        <a href="{{route('projet.show', $project->id)}}">
            <button class="btn btn-success">Voir le projet</button>
        </a>
    @endforeach

@endsection