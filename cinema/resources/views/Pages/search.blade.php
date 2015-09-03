@extends('layout')

@section('css')
    @parent
    <link href="{{ asset('css/actors/index.css') }}" rel="stylesheet" />
@endsection

@section('breadscrumb')
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Search</a></li>
@show


@section('js')
    @parent
    <script src="{{ asset('js/actors/index.js') }}"></script>
@endsection

@section('title')
    Page de recherche
@endsection



@section('content')

    <div class="row">
        <div class="col-sm-6">
            <form method="GET" action="{{ route('search') }}" class="panel form-horizontal">
                <div class="panel-heading">
                    <span class="panel-title">Formulaire de recherche</span>
                </div>
                <div class="panel-body">
                    <div class="row form-group">
                        <label class="col-sm-4 control-label" for="title">Titre:</label>
                        <div class="col-sm-8">
                            <input type="text" required placeholder="Titre" id="title" name="title" class="form-control">
                        </div>

                        <label class="col-sm-4 control-label" for="title">Langues:</label>
                        <div class="col-sm-8">
                            <select name="lang" class="fom-control">
                                <option value="fr">FR</option>
                                <option value="en">EN</option>
                            </select>
                        </div>

                        <label class="col-sm-4 control-label" for="title">Langues:</label>
                        <div class="col-sm-8">
                            <select multiple class="form-control" name="bo[]">
                                <option value="VO">VO</option>
                                <option value="VOST">VOST</option>
                                <option value="VOSTFR">VOSTFR</option>
                            </select>
                        </div>

                        <label class="col-sm-4 control-label" for="title">Langues:</label>
                        <div class="col-sm-8">
                            <input type="radio" name="visible" value="0" id="vis"><label for="vis">Visible</label>
                            <input type="radio" name="visible" value="1" id="invis"><label for="invis">Invisible</label>
                        </div>

                        <label class="col-sm-4 control-label" for="title">Langues:</label>
                        <div class="col-sm-8">
                            <input type="checkbox" name="cover[]" value="cover" id="cover"><label for="vis">Couverture</label>
                            <input type="checkbox" name="cover[]" value="cover" id="uncover"><label for="invis">Non Couverture</label>
                        </div>
                    </div>
                </div>
                <div class="panel-footer text-right">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Rechercher</button>
                </div>
            </form>
            <!-- /6. $HORIZONTAL_FORM -->
        </div>
    </div>
@endsection