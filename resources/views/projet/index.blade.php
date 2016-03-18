@extends('layouts.app')

@section('content')



    @foreach($projects as $project)
        @if($project->etat == 2)
            <h3>{{$project->nom_projet}}</h3>
            <p>Par : {{$project->name}}</p>

            <a href="{{route('projet.show', $project->id)}}">
                <button class="btn btn-success">Voir le projet en entier</button>
            </a>
         @endif
    @endforeach


@endsection