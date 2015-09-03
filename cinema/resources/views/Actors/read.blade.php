@extends('layout')



@section('content')
    {{ $actor->firstname }}
    {{ $actor->lastname }}
    {{ strip_tags($actor->biography) }}

@endsection