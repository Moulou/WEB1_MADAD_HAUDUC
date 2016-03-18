@extends('layouts.app')

@section('content')
    @include('partials.post.errors')
    <div class ="container-fluid">

        <h1 class="text-center">Contactez-nous</h1>

        <div class="form-group">
            {!! Form::email('adressemail', null, [
                'class' => 'form-control',
                'placeholder' => 'Votre adresse email'
            ]) !!}
        </div>

        <div class="form-group">
            {!! Form::text('sujet', null, [
                'class' => 'form-control',
                'placeholder' => 'Sujet de votre message'
            ]) !!}
        </div>
        <div class="form-group">
            {!! Form::textarea('message', null, [
                'class' => 'form-control',
                'placeholder' => 'Votre message'
            ]) !!}
        </div>


        {!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}
    </div>
@endsection