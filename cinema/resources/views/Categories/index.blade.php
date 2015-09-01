@extends('layout')

@section('content')

    {{-- This comment will not be in the rendered HTML --}}

    {{--<h3>{{ $movie->title  }}</h3>--}}
    {{--<p>{{ $movie->annee  }}</p>--}}


    {{--@include('Partials/_subtitle')--}}


    <h1>Page Acteurs index</h1>

    <h3>{{ $title }}</h3>

    <ul>
      @foreach($noms as $nom)
          <li>{{ $nom  }}</li>
      @endforeach
    </ul>

    <ul>
        @foreach($age as $age)
            <li>{{ $age  }}</li>
        @endforeach
    </ul>


    @for ($i = 0; $i < 10; $i++)
        The current value is {{ $i }}
    @endfor

    @if (count($age) === 1)
        I have one record!
    @elseif (count($age) > 1)
        I have multiple records!
    @else
        I don't have any records!
    @endif

    <p>{{ $chaine or "Texte par défaut"  }}</p>

    <ul>
        @foreach($localite as $ville => $acteurs)
            @if($ville == "Paris")
                <li>{{ $ville }}</li>
                <ul>
                    @foreach($acteurs as $acteur)
                        <li>{{ $acteur }}</li>
                    @endforeach
                </ul>
            @endif
        @endforeach
    </ul>

    <ul>
        @foreach($acteurs as  $clef => $val)
                <li> {{ $val  }}</li>
        @endforeach
    </ul>

{{--    <a href="{{ route("read", ['id' => 123])  }}">lien vers read</a>--}}
    <form action="">

    </form>

@endsection