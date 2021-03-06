@extends('layout')

@section('css')
    @parent
    <link href="{{ asset('css/actors/index.css') }}" rel="stylesheet" />
@endsection

@section('breadscrumb')
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Commentaires</a></li>
    <li class="active"><a href="#"><strong>Liste</strong></a></li>
@show

@section('title')
   Liste des commentaires
@endsection


@section('subtitle')
    <div class="page-header">
        <h1>
            <i class="fa fa-comments page-header-icon"></i>
            Liste de mes commentaires
        </h1>

        <div class="stat-panel pull-right col-md-3">
            <div class="stat-row">
                <!-- Info background, without padding, horizontally centered text, super large text -->
                <div class="stat-cell bg-info no-padding text-center text-slg">
                    <i class="fa fa-dashboard"></i>
                </div>
            </div> <!-- /.stat-row -->
            <div class="stat-row">
                <!-- Bordered, without top border, horizontally centered text, large text -->
                <div class="stat-cell bordered no-border-t text-center text-lg">
                    <strong>3.2</strong>/5
                    <small><small>Julien</small></small> a le plus commenté [<small><i>5 commentaires</i></small>]
                </div>
            </div> <!-- /.stat-row -->
        </div>
    </div>
@endsection




@section('content')

    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title"><strong>{{ count($comments) }}</strong> Commentaires sur les films</span>
            <div class="panel-heading-controls">
                <div class="row">
                    <div class="col-md-9">
                        <select id="commentselect" class="form-control input-sm pull-left">
                            <option value="0">Inactif</option>
                            <option value="1">En cours</option>
                            <option value="2">En ligne</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-xs btn-danger btn-outline pull-left"><span class="fa fa-save"></span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <table id="commentable" class="table" style="font-size: 13px" >
                <thead>
                <tr>
                    <th>#</th>
                    <th>Contenu</th>
                    <th>Film</th>
                    <th>Utilisateur</th>
                    <th>Note</th>
                    <th>Status</th>
                    <th>Creation</th>
                    <th>Suppression</th>
                </tr>
                </thead>
                <tbody>

{{--                {{ dump($comments) }}--}}
                @foreach($comments as $comment)
                    <tr class=" @if($comment->state == 0) bg-danger @elseif($comment->state == 1) bg-warning @else bg-success @endif ">
                        <td>
                            <label class="checkbox-inline">
                                <input type="checkbox" class="px">
                                <span class="lbl">{{ $comment->id }}</span>
                            </label>
                        </td>
                        <td>
                            <script>
                                init.push(function () {
                                    $('.editable').editable({
                                        type: 'text',
                                        name: 'username',
                                        title: 'Enter username'
                                    });

                                });
                            </script>
                            <a href="#" class="editable editable-pre-wrapped editable-click editable-open" data-type="textarea" data-pk="{{ $comment->id }}" data-placeholder="Your comments here..." data-title="Modifier le commentaire" class="editable editable-click">{{ $comment->content }}</a>
                            </td>
                        <td><a class="btn btn-primary" href=""><i class="fa fa-search"></i> {{ $comment->movies->title }} ({{ count($comment->movies->comments) }} comms)</a></td>
                        <td><i><i class="fa fa-user"></i> {{ $comment->user->username }}</i></td>
                        {{--<td>{{ $comment->content }}</td>--}}
                        <td><span class="badge badge-info">{{ $comment->note }}/5</span></td>
                        <td>
                            @if($comment->state == 0)
                                <div class="label label-danger"><i class="fa fa-eye-slash"></i> Inactif</div>
                            @elseif($comment->state == 1)
                                <div class="label label-warning"><i class="fa fa-refresh"></i> En cours de relecture</div>
                            @else
                                <div class="label label-success"><i class="fa fa-check"></i> En ligne</div>
                            @endif

                        </td>
                        <td>
                            {{ date('d/m/Y à H:i', strtotime($comment->date_created)) }}
{{--                            {{ $comment->date_created->diffForHumans()  }}--}}
                        </td>
                        <td>
                            <a class="btn btn-default"><i class="fa fa-times text-danger"></i></a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection