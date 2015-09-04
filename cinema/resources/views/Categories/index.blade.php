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

    <div class="row">
        <div class="col-md-8">
            <div class="alert alert-danger">
                <i class="fa fa-warning"></i> <strong>3</strong> catégories qui ont aucun film
            </div>
            <div class="alert alert-info">
                <i class="fa fa-info"></i> La catégorie <strong>Fantastique</strong> est la plus populaire <i>(4 films)</i>
            </div>
            <div class="alert alert-default">
                <i class="fa fa-dollar"></i> La catégorie <strong>Horreur</strong> a le plus gros budget de l'anne <strong>2015</strong> : <i>3 500 152</i> €
            </div>
        </div>
        <div class="panel panel-info panel-dark widget-profile col-md-4">
            <div class="panel-heading">
                <div class="widget-profile-bg-icon"><i class="fa fa-film"></i></div>
                <img src="assets/demo/avatars/3.jpg" alt="" class="widget-profile-avatar">
                <div class="widget-profile-header">
                    <span>Catégorie Fantastique</span><br>
                </div>
            </div> <!-- / .panel-heading -->
            <div class="widget-profile-counters">
                <div class="col-xs-4"><span>15</span><br>Films</div>
                <div class="col-xs-4"><span>30</span><br>Commentaires</div>
                <div class="col-xs-4"><span>18</span><br>Acteurs</div>
            </div>
            <div class="widget-profile-text">
                Lorem ipsum dolor sit amet
                Lorem ipsum dolor sit amet
                Lorem ipsum dolor sit amet
                Lorem ipsum dolor sit amet
            </div>
        </div>
    </div>

    <div class="col-sm-12">


        <div class="panel">

            <div class="panel-heading">
                <div class="panel-heading-controls">
                    <div class="btn-group " role="group">
                       Trié par
                        <select class="form-control">
                            <option>Id</option>
                            <option>Titre</option>
                            <option>Date de création</option>
                            <option>Nb de films</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="panel-body">
            <table class="table table-bordered" style="font-size: 12px">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Films</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->description }}</td>
                            <td><strong>{{ count($category->movies) }} <i class="fa fa-film"></i> </strong></td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-pagelines"></i> Actions&nbsp;<i class="fa fa-caret-down"></i></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Voir</a></li>
                                        <li><a href="#">Voir les films associés</a></li>
                                        <li><a href="#">Editer</a></li>
                                        <li><a href="#">Supprimer</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>

                        </tr>
                    @endforelse

                </tbody>
            </table>
            </div>
        </div>

    </div>
@endsection



@section('content')



@endsection