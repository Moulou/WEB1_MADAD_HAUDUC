@extends('layouts.app')

@section('content')



    @foreach($projects as $project)
        @if($project->etat == 2)
            <h3>{{$project->nom_projet}}</h3>
            <p>Par : {{$project->name}}</p>

            <a href="{{route('projet.show', $project->id)}}">
                <button class="btn btn-success">Voir le projet en entier</button>
            </a>



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
         @endif
    @endforeach


@endsection