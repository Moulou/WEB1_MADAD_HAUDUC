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
                    </div>
                </div>
            </div>
    @endforeach
    </div>
@endsection