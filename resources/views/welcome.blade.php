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
                            <a href="{{route('posts.create')}}">
                                <button class="btn btn-lg btn-block btn-info">Ecrire un article</button>
                            </a>

                        </div>

                        <div class="col-md-5">
                            <a href="{{route('projet.index')}}">
                                <button class="btn btn-lg btn-block btn-success">Voir les projets</button>
                            </a>
                            <br/>
                            <a href="{{route('projet.create')}}">
                                <button class="btn btn-lg btn-block btn-info">Soumettre un projet</button>
                            </a>
                        </div>
                    </div>
                <br/>
                </div>
           </div>
        </div>
    </div>
</div>
@endsection
