@extends('layout')

@section('css')
    @parent
    <link href="{{ asset('css/actors/index.css') }}" rel="stylesheet" />
@endsection

@section('breadscrumb')
        <li><a href="#">Home</a></li>
        <li class="active"><a href="#">Actors</a></li>
        <li class="active"><a href="#"><strong>Liste</strong></a></li>
@show


@section('js')
    @parent
    <script src="{{ asset('js/actors/index.js') }}"></script>
@endsection

@section('title')
    Liste de mes acteurs
@endsection

@section('subtitle')
    <div class="page-header">
        <h1>
            <i class="fa fa-users page-header-icon"></i>
            Liste de mes acteurs
        </h1>
    </div>
@endsection



@section('content')


@endsection