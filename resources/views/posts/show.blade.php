@extends('layouts.app')

@section('content')

    <h2>{{$post->titre}} <br> Auteur: {{$post->user->name}} </h2>
    <p>{{$post->contenu}}</p>

    <a href="{{route('posts.index')}}">
        <button class="btn btn-success">Retour</button>
    </a>

@endsection