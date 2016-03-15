@extends('layouts.app')

@section('content')
    <h1>hello</h1>


{!! Form::open(['route' => 'posts.store', 'method' => 'POST']) !!}



<div class="form-group">
    {!! Form::text('title', null, [
        'class' => 'form-control',
        'placeholder' => 'Titre de l\'article'
    ]) !!}
</div>

<div class="form-group">
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}

@endsection