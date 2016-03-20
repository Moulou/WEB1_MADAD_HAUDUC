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
                        <hr>
                            <form action="{{route('admin.update', $project->id)}}" method="POST">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="etat" value="1">
                                <button class="btn btn-warning pull-left">Mettre en attente <i class="fa fa-clock-o"></i></button>
                            </form>
                        <form action="{{route('admin.update', $project->id)}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="etat" value="2">
                            <button class="btn btn-success pull-left">Valider <i class="fa fa-check"></i></button>
                        </form>


                        @elseif($project->etat == 1){{--Lorsque le projet est en attente de modération--}}
                            <p style="color:darkgrey;" class="pull-right">Projet en attente <i class="fa fa-clock-o"></i></p>
                        <hr>
                        <form action="{{route('admin.update', $project->id)}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="etat" value="0">
                            <button class="btn btn-danger pull-left">Refuser <i class="fa fa-times"></i></button>
                        </form>
                        <form action="{{route('admin.update', $project->id)}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="etat" value="2">
                            <button class="btn btn-success pull-left">Validé <i class="fa fa-check"></i></button>
                        </form>

                        @elseif($project->etat == 2){{--Lorsque le projet est validé--}}
                            <p style="color:green;" class="pull-right">Projet validé <i class="fa fa-check"></i></p>
                        <hr>
                        <form action="{{route('admin.update', $project->id)}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="etat" value="1">
                            <button class="btn btn-warning pull-left">Mettre en attente <i class="fa fa-clock-o"></i></button>
                        </form>
                        <form action="{{route('admin.update', $project->id)}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="etat" value="0">
                            <button class="btn btn-danger pull-left">Refuser <i class="fa fa-times"></i></button>
                        </form>
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










