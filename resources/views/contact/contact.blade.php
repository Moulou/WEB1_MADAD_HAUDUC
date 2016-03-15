@extends('layouts.app')

@section('content')
    <div class ="container-fluid">

        <div class="form-group">
            {{\Illuminate\Support\Facades\Auth::user()->name}}
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