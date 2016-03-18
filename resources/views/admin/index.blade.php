@extends('layouts.app')

@section('content')
    <h1>PAGE ADMINISTRATEUR</h1>
    {{--<div class="row">
        <div class="col-md-2 col-md-offset-1">
            <a href="{{route('admin.showValidate')}}"><button class="btn btn-success">Projet validé</button></a>
        </div>
        <div class="col-md-2 col-md-offset-2">
            <a href=""><button class="btn btn-warning">Projet en attente</button></a>
        </div>
        <div class="col-md-2 col-md-offset-2">
            <a href=""><button class="btn btn-danger">Projet refusé</button></a>
        </div>
    </div>--}}
    <div class="row">
    @foreach($projects as $project)

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>{{$project->nom_projet}}</h3>
                        <p>Auteur: {{$project->user->name}}</p>
                        @if($project->etat == 0)
                            <p style="color:red;" class="pull-right">Projet refusé <i class="fa fa-times"></i></p>
                            {!! Form::model($project, ['route' => ['projet.update', $project->id], 'method' => 'PUT']) !!}
                            {!! Form::hidden('admin', 'admin') !!}
                            {!! Form::hidden('etat', 1) !!}
                            {!! Form::submit('Mettre en attente', ['class' => 'btn btn-warning']) !!}
                            {!! Form::close() !!}

                            {!! Form::model($project, ['route' => ['projet.update', $project->id], 'method' => 'PUT']) !!}
                            {!! Form::hidden('admin', 'admin') !!}
                            {!! Form::hidden('etat', 2) !!}
                            {!! Form::submit('Valider', ['class' => 'btn btn-success']) !!}
                            {!! Form::close() !!}
                        @elseif($project->etat == 1)
                            <p style="color:darkgrey;" class="pull-right">Projet en attente <i class="fa fa-clock-o"></i></p>
                            {!! Form::model($project, ['route' => ['projet.update', $project->id], 'method' => 'PUT']) !!}
                            {!! Form::hidden('admin', 'admin') !!}
                            {!! Form::hidden('etat', 0) !!}
                            {!! Form::submit('Refuser', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}

                            {!! Form::model($project, ['route' => ['projet.update', $project->id], 'method' => 'PUT']) !!}
                            {!! Form::hidden('admin', 'admin') !!}
                            {!! Form::hidden('etat', 2) !!}
                            {!! Form::submit('valider', ['class' => 'btn btn-success']) !!}
                            {!! Form::close() !!}
                        @elseif($project->etat == 2)
                            <p style="color:green;" class="pull-right">Projet validé <i class="fa fa-check"></i></p>
                            {!! Form::model($project, ['route' => ['projet.update', $project->id], 'method' => 'PUT']) !!}
                            {!! Form::hidden('admin', 'admin') !!}
                            {!! Form::hidden('etat', 0) !!}
                            {!! Form::submit('Refuser', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}

                            {!! Form::model($project, ['route' => ['projet.update', $project->id], 'method' => 'PUT']) !!}
                            {!! Form::hidden('admin', 'admin') !!}
                            {!! Form::hidden('etat', 1) !!}
                            {!! Form::submit('Mettre en attente', ['class' => 'btn btn-warning']) !!}
                            {!! Form::close() !!}
                        @endif

                        {{--<a href="{{route('admin.show', $project->id)}}">
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
                        </form>--}}

                    </div>
                </div>
            </div>

    @endforeach
    </div>
@endsection










