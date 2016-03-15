@extends('layouts.app')

@section('content')
    @include('partials.projet.errors')
    <div class="container-fluid">
        <h1 class="text-center">MODIFICATION DE LA DEMANDE D’INSCRIPTION A LA BOURSE AUX PROJETS DE L’IIM</h1>

        {!! Form::model($project, ['route' => ['project.update', $project->id], 'method' => 'PUT']) !!}



        <div class="form-group">
            {!! Form::text('nom_projet', null, [
                'class' => 'form-control',
                'placeholder' => 'Nom du projet'
            ]) !!}
        </div>
        <div class="form-group">
            {!! Form::text('name', null, [
                'class' => 'form-control',
                'placeholder' => 'Le nom du contact pour le suivi du projet'
            ]) !!}
        </div>
        <div class="form-group">
            {!! Form::text('fonction', null, [
                'class' => 'form-control',
                'placeholder' => 'La fonction du contact'
            ]) !!}
        </div>
        <div class="form-group">
            {!! Form::text('adresse', null, [
                'class' => 'form-control',
                'placeholder' => 'L\' adresse du contact'
            ]) !!}
        </div>
        <div class="form-group">
            {!! Form::email('email', null, [
                'class' => 'form-control',
                'placeholder' => 'L\'adresse email du contact'
            ]) !!}
        </div>
        <div class="form-group">
            {!! Form::tel('tel', null, [
                'class' => 'form-control',
                'placeholder' => 'Le numéro de téléphone du contact'
            ]) !!}
        </div>
        <div class="form-group">
            {!! Form::textarea('fiche_identite', null, [
            'class' => 'form-control',
            'placeholder' => 'La fiche d\'identité du contact']) !!}
        </div>

        <h1 class="text-center">DESCRIPTIF DU PROJET</h1>
        <div class="form-group">
            {!! Form::select('type', $type, null, ['class' => 'form-control']) !!}


        </div>
        <div class="form-group">
            {!! Form::textarea('contexte', null, [
            'class' => 'form-control',
            'placeholder' => 'Le contexte de la demande']) !!}
        </div>
        <div class="form-group">
            {!! Form::textarea('demande', null, [
            'class' => 'form-control',
            'placeholder' => 'Votre demande']) !!}
        </div>

        <p>Quelles sont vos attentes ? </p>
        <div class="form-group">
            {!! Form::textarea('objectif', null, [
            'class' => 'form-control',
            'placeholder' => 'Vos objectifs']) !!}
        </div>
        <div class="form-group">
            {!! Form::textarea('contrainte', null, [
            'class' => 'form-control',
            'placeholder' => 'Contraintes particulières éventuelles et informations complémentaires']) !!}
        </div>


        {!! Form::submit('Envoyer', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}
    </div>
@endsection