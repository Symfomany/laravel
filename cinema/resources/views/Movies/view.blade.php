@extends('layout')


@section('content')
    <h3> Titre: {{ $movie->title }}</h3>
    <p> Synopsis: {!! $movie->synopsis !!}</p>
    <p> Trailer: {!! $movie->trailer !!}</p>

    <hr />
    <h3><i class="fa fa-comments"></i> Commentaires</h3>
    <ul>
        @foreach($movie->comments as $comment)
            <li> {{  $comment->content }}  </li>
        @endforeach
    </ul>
    <hr />
    <form id="addcomment" action="{{ route('movies.comment', ['id' => $movie->id ]) }}" method="post">
        <textarea placeholder="Ecrire un commentaire" class="form-control" name="content"></textarea>
        <button class="btn btn-primary" type="submit"><i class="fa fa-pencil"></i> J'écris ce commentaire</button>
        {{ csrf_field() }}
    </form>
@stop