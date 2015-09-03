@extends('layout')

@section('css')
    @parent
    <link href="{{ asset('css/actors/index.css') }}" rel="stylesheet" />
@endsection

@section('breadscrumb')
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Catégories</a></li>
    <li class="active"><a href="#"><strong>Liste</strong></a></li>
@show

@section('title')
    Liste des catégories
@endsection

@section('subtitle')
    <div class="page-header">
        <h1>
            <i class="fa fa-users page-header-icon"></i>
            Liste des catégories
        </h1>
    </div>
@endsection



@section('content')



@endsection