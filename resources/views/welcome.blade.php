@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenue</div>



                <a href="{{route('posts.index')}}">
                    <button class="btn btn-success">Voir les articles</button>
                </a>

                <a href="{{route('posts.create')}}">
                    <button class="btn btn-info">Ecrire un article</button>
                </a>

                <a href="{{route('projet.index')}}">
                    <button class="btn btn-success">Voir les projets</button>
                </a>

                <a href="{{route('projet.create')}}">
                    <button class="btn btn-info">Soumettre un projet</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
