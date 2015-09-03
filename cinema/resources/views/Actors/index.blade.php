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



    <div class="">
         <a href="" class="pull-right btn btn-success btn-medium"><i class="fa fa-plus"></i> Créer un acteur</a>
        <br />
    </div>
    <hr />


    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">Tableaux des acteurs</span>
        </div>
        <div class="panel-body">
            <div class="table-primary">
                <div role="grid" id="jq-datatables-example_wrapper" class="dataTables_wrapper form-inline no-footer">
                    <div class="class="table-header clearfix"></div>
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable no-footer" id="jq-datatables-example" aria-describedby="jq-datatables-example_info">
                            <thead>
                                <th>Images</th>
                                <th>Nom</th>
                                <th>Naissance</th>
                                <th>City</th>
                                <th>Films</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                @foreach($actors as $actor)
                                    <tr class="">
                                        <td class="col-lg-1"> <a class="thumbnail" href="{{ route('actors.read', ['id' => $actor->id]) }}"><img  class="img-responsive" src="{{ $actor->image }}" /></a> </td>
                                        <td class="sorting_1 center"><i><a href="{{ route('actors.read', ['id' => $actor->id]) }}">{{ $actor->firstname }} {{ $actor->lastname }}</a></i></td>
                                        <td class="sorting_2 center">{{ $actor->dob }}</td>
                                        <td class="sorting_2 center">{{ $actor->city }}</td>
                                        <td class="sorting_2 center"><strong>{{ count($actor->movies) }} <i class="fa fa-film"></i></strong></td>
                                        <td class="sorting_2 center">
                                            <a href="" class="btn btn-small"><i class="fa fa-search"></i> Voir</a>
                                            <a href="{{ route('actors.remove', ['id' => $actor->id]) }}" class="btn btn-danger btn-small"><i class="fa fa-times"></i> Supprimer</a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="table-footer clearfix">
                         </div>
            </div>
        </div>
    </div>

@endsection