@extends('layouts.app')

@section('content')
    @include('partials.projet.errors')
<div class="container-fluid">
    <h1 class="text-center">DEMANDE D’INSCRIPTION A LA BOURSE AUX PROJETS DE L’IIM</h1>

    {!! Form::open(['route' => 'projet.store', 'method' => 'POST']) !!}

    Auteur : {{\Illuminate\Support\Facades\Auth::user()->name}}

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
            'placeholder' => 'Le numéro de téléphone du contact',
            'pattern' => '^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$'
        ]) !!}
    </div>
    <div class="form-group">
        {!! Form::textarea('fiche_identite', null, [
        'class' => 'form-control',
        'placeholder' => 'La fiche d\'identité du contact']) !!}
    </div>

    <h1 class="text-center">DESCRIPTIF DU PROJET</h1>
    <div class="form-group">
        {!! Form::select('type', array(
        'vide' => 'Sélectionner le type du projet',
        'site' => 'Site internet',
        '3d' => '3D',
        '2d' => 'Animation 2D',
        'multi' => 'Installation Multimédia',
        'jeu' => 'Jeu vidéo',
        'dvd' => 'DVD',
        'print' => 'PRINT',
        'CD' => 'CD-ROM',
        'evenement' => 'Evènement',
        'Autre'=> 'Autre : à préciser dans la demande'),
         ['class' => 'form-control']) !!}


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