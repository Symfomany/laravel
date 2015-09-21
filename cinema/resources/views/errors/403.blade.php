@extends('layout')


@section('breadscrumb')
<li><a href="#">Home</a></li>
<li><a href="#">Accès refusé</a></li>
@show


@section('title')
Liste de mes acteurs
@endsection

@section('subtitle')
<div class="page-header">
    <h1>
        <i class="fa fa-plus page-header-icon"></i>
        Accès refusé
    </h1>
</div>
@endsection



@section('content')

<div class="row">
    <h3>Accès refusé</h3>
    <p>Vous n'avez pas la permission de gérer cette partie.</p>
</div>


@endsection