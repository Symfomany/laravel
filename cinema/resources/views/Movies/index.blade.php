@extends('layout')


@section('breadscrumb')
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Movies</a></li>
    <li class="active"><a href="#"><strong>Liste</strong></a></li>
@show


@section('content')

    <div class="row">
        <div class="col-md-8">
        <div class="stat-panel">
            <!-- Success background, bordered, without top and bottom borders, without left border, without padding, vertically and horizontally centered text, large text -->
            <a href="#" class="stat-cell col-xs-5 bg-info bordered no-border-vr no-border-l no-padding valign-middle text-center text-lg">
                <i class="fa fa-film"></i>&nbsp;&nbsp;<strong>33</strong> films
            </a> <!-- /.stat-cell -->
            <!-- Without padding, extra small text -->
            <div class="stat-cell col-xs-7 no-padding valign-middle">
                <!-- Add parent div.stat-rows if you want build nested rows -->
                <div class="stat-rows">
                    <div class="stat-row">
                        <!-- Success background, small padding, vertically aligned text -->
                        <a href="#" class="stat-cell bg-info padding-sm valign-middle">
                            17 films en avant
                            <i class="fa fa-star pull-right"></i>
                        </a>
                    </div>
                    <div class="stat-row">
                        <!-- Success darken background, waring padding, vertically aligned text -->
                        <a href="#" class="stat-cell bg-info darken padding-sm valign-middle">
                            5 films pas encore sortis
                            <i class="fa fa-bug pull-right"></i>
                        </a>
                    </div>
                    <div class="stat-row">
                        <!-- Success darker background, small padding, vertically aligned text -->
                        <a href="#" class="stat-cell bg-info darker padding-sm valign-middle">
                            2 films inactifs
                            <i class="fa fa-eye-slash pull-right"></i>
                        </a>
                    </div>
                </div> <!-- /.stat-rows -->
            </div> <!-- /.stat-cell -->
        </div>
        </div>
        <div class="col-md-4">

            <div class="stat-panel">
                <!-- Success background. vertically centered text -->
                <div class="stat-cell bg-danger valign-middle">
                    <!-- Stat panel bg icon -->
                    <i class="fa fa-dollar bg-icon"></i>
                    <!-- Extra large text -->
                    <span class="text-xlg"><strong>7 458 258,38 €</strong></span><br>
                    <!-- Big text -->
                    <span class="text-bg">Budget</span><br>
                    <!-- Small text -->
                    <span class="text-sm">Total de l'anne 2015</span>
                </div> <!-- /.stat-cell -->
            </div>
        </div>

    </div>


    <div class="row"></div>
    <div class="">
        <a href="" class="pull-right btn btn-success btn-medium"><i class="fa fa-plus"></i> Créer un acteur</a>
        <br />
    </div>
    <hr />
    <div class="panel">
        <div class="panel-heading">
            <div class="panel-heading-controls">
                <div class="btn-group " role="group">
                    <a href="{{route('movies.index') }}" class="@if($bo == "*") active @endif btn btn-primary"><i class="fa fa-language"></i> Tous</a>
                    <a href="{{route('movies.index', ['bo' =>'VO']) }}" class="@if($bo == "VO") active @endif  btn btn-primary"><i class="fa fa-language"></i> VO</a>
                    <a href="{{route('movies.index', ['bo' =>'VF']) }}" class="@if($bo == "VF") active @endif  btn btn-primary"><i class="fa fa-language"></i> VF</a>
                    <a href="{{route('movies.index', ['bo' =>'VOST']) }}" class="@if($bo == "VOST") active @endif btn btn-primary"><i class="fa fa-language"></i> VOST</a>
                    <a href="{{route('movies.index', ['bo' =>'VOSTFR']) }}" class="@if($bo == "VOSTFR") active @endif btn btn-primary"><i class="fa fa-language"></i> VOSTFR</a>
                </div>
                <span style="color: #ccc">|</span>
                <div class="btn-group " role="group">
                    <a href="{{route('movies.index', ['visibilite' => 1, "bo" => "*"]) }}" class="@if($visibilite == 1) active @endif btn btn-primary"><i class="fa fa-eye"></i> Visible</a>
                    <a href="{{route('movies.index', ['visibilite' => 0, "bo" => "*"]) }}" class="@if($visibilite == 0) active @endif btn btn-primary"><i class="fa fa-eye-slash"></i> Invisible</a>
                </div>
                <span style="color: #ccc">|</span>
                <div class="btn-group " role="group">
                    <a href="{{route('movies.index', ['visibilite'=> "*",'distributeur' => "Warner_bros", "bo" => "*"]) }}" class="btn btn-primary"><i class="fa fa-eye"></i> Warner Bros</a>
                    <a href="{{route('movies.index', ['visibilite'=> "*", 'distributeur' => "HBO", "bo" => "*"]) }}" class="btn btn-primary"><i class="fa fa-eye-slash"></i> HBO</a>
                    <a href="{{route('movies.trash') }}" class="btn btn-danger"><i class="fa fa-trash"></i> Poubelle</a>

                </div>
                <div class="panel-heading-controls">
                    <select id="actionslist" class="form-control input-sm">
                        <option>Actions</option>
                        <option value="1">Supprimer</option>
                        <option value="2">Activer</option>
                        <option value="3">Desactiver</option>
                    </select>
                    <button class=" pull-left btn btn-xs">OK</button>
                </div>
            </div>




        </div>
        <div class="panel-body">
            <div class="table-warning">
                <div role="grid" id="jq-datatables-example_wrapper" class="dataTables_wrapper form-inline no-footer">
                    <div class="class="table-header clearfix"></div>
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered dataTable no-footer" id="list" aria-describedby="jq-datatables-example_info">
                    <thead>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Activation</th>
                    <th>Titre</th>
                    <th>Categorie</th>
                    <th>Description</th>
                    <th>Durée</th>
                    <th>Date de sortie</th>
                    <th>Actions</th>
                    </thead>
                    <tbody>
                    @forelse($movies as $movie)
                        <tr class="">
                            <td class="col-lg-1"><input data-url="{{ route('movies.remove', ['id' => $movie->id]) }}" type="checkbox"> {{ $movie->id }}</td>
                            <td class="col-lg-1"><a href="" class="thumbnail"><img  class="img-responsive" src="{{ $movie->image }}" /></a> </td>
                            <td class="col-lg-1">
                                    @if($movie->visible == 1)
                                        <i class="fa fa-check-square"></i>
                                    @else
                                        <i class="fa fa-check-square-o"></i>
                                    @endif

                                    @if($movie->cover == 1)
                                        <i class="fa fa-star"></i>
                                    @else
                                        <i class="fa fa-star-o"></i>
                                    @endif
                            </td>
                            <td class="sorting_1 center"><i><a href="">{{ $movie->title }}</a></i></td>
                            <td class="sorting_2 center">{{  $movie->categories->title  }}</td>
                            <td class="sorting_2 center">{{ str_limit( strip_tags($movie->description), $limit = 100, $end = '...') }}</td>
                            <td class="sorting_2 center"><strong>{{ $movie->duree }} h.</strong></td>
                            <td class="sorting_2 center">{{ $movie->date_release }}</td>
                            <td class="sorting_2 center">
                                <a href="" class="btn btn-xs"><i class="fa fa-search"></i> Voir</a>
                                <a href="" class="btn btn-xs btn-primary"><i class="fa fa-thumbs-up"></i> Note de presse <small>({{ $movie->note_presse }}/5)</small></a>
                                <a href="" class="btn btn-xs btn-danger"><i class="fa fa-thumbs-down"></i> Note de presse <small>({{ $movie->note_presse }}/5)</small></a>

                                @if(Route::current()->getName() == "movies.trash")
                                    <a href="{{ route('movies.restore', ['id' => $movie->id ]) }}" class="btn btn-xs btn-info"><i class="fa fa-refresh"></i> Restaurer</a>
                                @else
                                    <a href="" class="btn btn-xs"><i class="fa fa-times"></i> Supprimer</a>
                                @endif
                            </td>
                            {{--si le segment nméro 2 de ma route est trash--}}

                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">
                                <div class="alert alert-danger">
                                    <i class="fa fa-warning"></i> Aucun film a venir
                                </div>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <div class="table-footer clearfix">
                </div>
            </div>
        </div>
    </div>


@stop