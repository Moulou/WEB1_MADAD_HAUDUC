@extends('layouts.app')

@section('content')
    @include('partials.post.errors')
<div class="container-fluid">
    <h1 class="text-center">POSTER UN ARTICLE</h1>


{!! Form::open(['route' => 'posts.store', 'method' => 'POST']) !!}



<div class="form-group">
    {!! Form::text('titre', null, [
        'class' => 'form-control',
        'placeholder' => 'Titre de l\'article'
    ]) !!}
</div>

<div class="form-group">
    {!! Form::textarea('contenu', null, [
    'class' => 'form-control',
    'placeholder' => 'Votre article']) !!}
</div>

{!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}
</div>
@endsection