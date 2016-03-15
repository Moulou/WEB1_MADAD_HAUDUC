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

    @if(Auth::check() && Auth::user()->id == $project->user_id)
        <a href="{{route('projet.edit', $project->id)}}">
            <button class="btn btn-info">Editer l'article</button>
        </a>
        <form action="{{route('projet.destroy', $project->id)}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-danger">Supprimer l'article</button>
            @endif
        </form>


@endsection