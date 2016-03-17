@extends('layouts.app')

@section('content')

    <h2>{{$post->titre}} <br> Auteur: {{$post->user->name}} </h2>
    <p>{{$post->contenu}}</p>
    <p class="pull-right">{{$post->created_at}}</p>

    <a href="{{route('posts.index')}}">
        <button class="btn btn-success">Retour</button>
    </a>
    <hr>
    @if(\Illuminate\Support\Facades\Auth::check())
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
    @endif
    @foreach($commentaires as $commentaire)
        @if($commentaire->post_id == $post->id)
            @if(Auth::check() && Auth::user()->id == $commentaire->user_id)
                <form action="{{route('commentaires.destroy', $commentaire->id)}}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger pull-right"><i class="fa fa-times"></i></button>
                </form>
            @endif
            <h3>{{$commentaire->user->name}}</h3>
            <p>{{$commentaire->content}}</p>
            <p class="pull-right">{{$commentaire->created_at}}</p>
            <hr>
        @endif
    @endforeach
@endsection