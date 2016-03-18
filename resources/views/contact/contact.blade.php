@extends('layouts.app')

@section('content')
    @include('partials.contact.errors')
    <div class="container">
        <div class="row">

                <h1 class="text-center">Contactez-nous </h1>

                {!! Form::open() !!}

                <div class="form-group">

                    {!! Form::text('Nom', null,
                        array(
                              'class'=>'form-control',
                              'placeholder'=>'Votre nom')) !!}
                </div>

                <div class="form-group">

                    {!! Form::text('Sujet', null,
                        array(
                              'class'=>'form-control',
                              'placeholder'=>'Votre sujet')) !!}
                </div>

                <div class="form-group">

                    {!! Form::textarea('message', null,
                        array(
                              'class'=>'form-control',
                              'placeholder'=>'Votre message')) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Envoyer',
                      array('class'=>'btn btn-success')) !!}
                </div>
                {!! Form::close() !!}



        </div>
    </div>
@endsection