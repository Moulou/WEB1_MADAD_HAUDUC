@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Profil</div>

                <div class="panel-body">
                    <p>Nom : {{ $user->name }}</p>
                    <p>Email : {{ $user->email }}</p>
                    <p>Fonction : {{ $user->fonction }}</p>
                    <p>Adresse : {{ $user->adresse }}</p>
                    <p>Téléphone : {{ $user->tel }}</p>
                    <a href="{{route('user.edit', $user->id)}}">
                        <button class="btn btn-success pull-right">Modifier</button>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
