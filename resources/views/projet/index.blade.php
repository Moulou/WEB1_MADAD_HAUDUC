@extends('layouts.app')

@section('content')



    @foreach($projects as $project)
        <h3>{{$project->nom_projet}}</h3>
        <p>{{$project->tel}}</p>
        <a href="{{route('projet.show', $project->id)}}">
            <button class="btn btn-success">Voir le projet</button>
        </a>
    @endforeach

@endsection