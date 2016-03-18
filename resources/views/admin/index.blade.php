@extends('layouts.app')

@section('content')
    <h1 class="text-center">PAGE ADMINISTRATEUR</h1>
    <div class="row">
    @foreach($projects as $project)

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>{{$project->nom_projet}}</h3>
                        <p>Auteur: {{$project->user->name}}</p>

                        @if($project->etat == 0){{--Lorsque le projet est refusé--}}
                            <p style="color:red;" class="pull-right">Projet refusé <i class="fa fa-times"></i></p>
                            {!! Form::model($project, ['route' => ['admin.update', $project->id], 'method' => 'PUT']) !!}
                            {!! Form::hidden('admin', 'admin') !!}
                            {!! Form::hidden('etat', 1) !!}
                            {!! Form::submit('Mettre en attente', ['class' => 'btn btn-warning']) !!}
                            {!! Form::close() !!}

                            {!! Form::model($project, ['route' => ['admin.update', $project->id], 'method' => 'PUT']) !!}
                            {!! Form::hidden('admin', 'admin') !!}
                            {!! Form::hidden('etat', 2) !!}
                            {!! Form::submit('Valider', ['class' => 'btn btn-success']) !!}
                            {!! Form::close() !!}

                        @elseif($project->etat == 1){{--Lorsque le projet est en attente de modération--}}
                            <p style="color:darkgrey;" class="pull-right">Projet en attente <i class="fa fa-clock-o"></i></p>
                            {!! Form::model($project, ['route' => ['admin.update', $project->id], 'method' => 'PUT']) !!}
                            {!! Form::hidden('admin', 'admin') !!}
                            {!! Form::hidden('etat', 0) !!}
                            {!! Form::submit('Refuser', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}

                            {!! Form::model($project, ['route' => ['admin.update', $project->id], 'method' => 'PUT']) !!}
                            {!! Form::hidden('admin', 'admin') !!}
                            {!! Form::hidden('etat', 2) !!}
                            {!! Form::submit('Valider', ['class' => 'btn btn-success']) !!}
                            {!! Form::close() !!}

                        @elseif($project->etat == 2){{--Lorsque le projet est validé--}}
                            <p style="color:green;" class="pull-right">Projet validé <i class="fa fa-check"></i></p>
                            {!! Form::model($project, ['route' => ['admin.update', $project->id], 'method' => 'PUT']) !!}
                            {!! Form::hidden('admin', 'admin') !!}
                            {!! Form::hidden('etat', 0) !!}
                            {!! Form::submit('Refuser', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}

                            {!! Form::model($project, ['route' => ['admin.update', $project->id], 'method' => 'PUT']) !!}
                            {!! Form::hidden('admin', 'admin') !!}
                            {!! Form::hidden('etat', 1) !!}
                            {!! Form::submit('Mettre en attente', ['class' => 'btn btn-warning']) !!}
                            {!! Form::close() !!}
                        @endif

                        <a href="{{route('admin.show', $project->id)}}">
                            <button class="btn btn-default">Voir le projet en entier</button>
                        </a>
                    </div>
                </div>
            </div>

    @endforeach
    </div>
@endsection










