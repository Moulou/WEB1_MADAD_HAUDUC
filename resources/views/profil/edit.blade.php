@extends('layouts.app')

@section('content')
    @include('partials.post.errors')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Modif Profil</div>

                <div class="panel-body">
                        {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'PUT']) !!}

                        <div class="form-group">
                            {!! Form::text('name', null, [
                                'class' => 'form-control',
                                'placeholder' => 'Titre de l\'article'
                            ]) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::text('fonction', null, [
                            'class' => 'form-control',
                            'placeholder' => 'Votre Fonction']) !!}
                        </div>
                    <div class="form-group">
                        {!! Form::text('adresse', null, [
                        'class' => 'form-control',
                        'placeholder' => 'Votre adresse']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::number('tel', null, [
                        'class' => 'form-control',
                        'placeholder' => 'Votre Téléphone']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::email('email', null, [
                        'class' => 'form-control',
                        'placeholder' => 'Votre adresse email']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::password('password', [
                        'class' => 'form-control',
                        'placeholder' => 'Votre nouveau mot de passe']) !!}
                    </div>

                        {!! Form::submit('Envoyer', ['class' => 'btn btn-success pull-right']) !!}
                        {!! Form::close() !!}
                    <a href="{{route('user.index')}}"><button class="btn btn-primary">Retour</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
