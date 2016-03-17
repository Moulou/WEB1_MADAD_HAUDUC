@extends('layouts.app')

@section('content')
    <h1>PAGE ADMINISTRATEUR</h1>
    <div class="row">
    @foreach($projects as $project)

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>{{$project->name}}</h3>
                        <p>Auteur: {{$project->user->name}}</p>
                        @if($project->etat == 0)
                            <p style="color:red;">Projet refusé</p>
                        @elseif($project->etat == 1)
                            <p style="color:darkgrey;">Projet en attente</p>
                        @elseif($project->etat == 2)
                            <p style="color:green;">Projet validé</p>
                        @endif

                        <a href="{{route('admin.show', $project->id)}}">
                            <button class="btn btn-default">Voir le projet en entier</button>
                        </a>
                        <a href="{{route('projet.edit', $project->id)}}">
                            <button class="btn btn-info">Modifier le projet</button>
                        </a>

                        <a href="{{route('projet.edit', $project->id)}}">
                            <button class="btn btn-success">Valider le projet</button>
                        </a>

                        <form action="{{route('projet.destroy', $project->id)}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger">Supprimer le projet</button>
                        </form>

                    </div>
                </div>
            </div>

    @endforeach
    </div>
@endsection










