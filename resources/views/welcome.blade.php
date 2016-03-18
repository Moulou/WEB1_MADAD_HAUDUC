@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Accueil</div>
                <h2 class="text-center"> Bienvenue sur la plateforme de l'IIM</h2>
                <br/>
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                                <a href="{{route('posts.index')}}">
                                    <button class="btn btn-lg btn-block btn-success">Voir les articles</button>
                                </a>
                            <br/>
                            @if(\Illuminate\Support\Facades\Auth::check())
                            <a href="{{route('posts.create')}}">
                                <button class="btn btn-lg btn-block btn-info">Ecrire un article</button>
                            </a>
                            @endif
                            <br/>

                        </div>

                        <div class="col-md-5">
                            <a href="{{route('projet.index')}}">
                                <button class="btn btn-lg btn-block btn-success">Voir les projets</button>
                            </a>

                            <br/>
                            @if(\Illuminate\Support\Facades\Auth::check())
                            <a href="{{route('projet.create')}}">
                                <button class="btn btn-lg btn-block btn-info">Soumettre un projet</button>
                            </a>
                            @endif
                        </div>

                        @if(Auth::check() && Auth::user()->admin == 1)
                        <div class="col-md-6 col-md-offset-3">
                            <br/>
                            <a href="{{\Illuminate\Support\Facades\URL::asset('/admin')}}">
                                <button class="btn btn-lg btn-block btn-danger">Modérer</button>
                            </a>

                        </div>
                        @endif


                    </div>
                <br/>
                </div>
           </div>
        </div>
    </div>
</div>
@endsection
