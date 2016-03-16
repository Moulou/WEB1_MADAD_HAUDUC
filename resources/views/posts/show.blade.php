@extends('layouts.app')

@section('content')

    <h2>{{$post->titre}} <br> Auteur: {{$post->user->name}} </h2>
    <p>{{$post->contenu}}</p>
    <p class="pull-right">{{$post->created_at}}</p>

    <a href="{{route('posts.index')}}">
        <button class="btn btn-success">Retour</button>
    </a>
    <hr>
    {!! Form::open(['route' => 'commentaires.store', 'method' => 'POST']) !!}


    Auteur : {{\Illuminate\Support\Facades\Auth::user()->name}}

    {!! Form::hidden('post_id', $post->id) !!}
    <div class="form-group">
        {!! Form::textarea('contenu', null, [
        'class' => 'form-control',
        'placeholder' => 'Votre commentaire']) !!}
    </div>

    {!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
    <hr>

    @foreach($commentaires as $commentaire)
        @if($commentaire->post_id == $post->id)
            @if(Auth::check() && Auth::user()->id == $commentaire->user_id)
                <a href="{{route('commentaires.destroy', $commentaire->id)}}" class="pull-right"><i class="fa fa-times"></i></a>
            @endif
            <h3>{{$commentaire->user->name}}</h3>
            <p>{{$commentaire->content}}</p>
            <p class="pull-right">{{$commentaire->created_at}}</p>
            <hr>
        @endif
    @endforeach
@endsection