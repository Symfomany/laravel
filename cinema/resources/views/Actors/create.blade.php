@extends('layout')

@section('css')
    @parent
    <link href="{{ asset('css/actors/index.css') }}" rel="stylesheet" />
@endsection

@section('breadscrumb')
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Actors</a></li>
    <li class="active"><a href="#"><strong>Créer</strong></a></li>
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
            <i class="fa fa-plus page-header-icon"></i>
            Créer un acteur
        </h1>
    </div>
@endsection



@section('content')

    <div class="row">
        <div class="col-sm-12">


            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form enctype="multipart/form-data" novalidate method="post" action="{{ route('actors.post') }}" class="panel form-horizontal">
                {{--Important: CSRF--}}
                {{ csrf_field() }}

                <div class="panel-heading">
                    <span class="panel-title">Création d'un acteur</span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="firstname" class="col-sm-2 control-label">Prénom</label>
                        <div class="col-sm-10">
                            <input required type="text" name="firstname" value="{{ Input::old('firstname') }}" class="form-control" id="firstname" placeholder="Prénom de l'acteur">
                            @if ($errors->has('firstname')) <p class="help-block text-danger">{{ $errors->first('firstname') }}</p> @endif
                        </div>
                    </div> <!-- / .form-group -->

                    <div class="form-group">
                        <label for="lastname" class="col-sm-2 control-label">Nom</label>
                        <div class="col-sm-10">
                            <input required type="text" value="{{ Input::old('lastname') }}" name="lastname" class="form-control" id="lastname" placeholder="Nom de l'acteur">
                            @if ($errors->has('lastname')) <p class="help-block text-danger">{{ $errors->first('lastname') }}</p> @endif

                        </div>
                    </div> <!-- / .form-group -->


                    <div class="form-group">
                        <label for="dob"  class="col-sm-2 control-label">Date de naissance:</label>
                        <div class="col-sm-10">
                            <input type="text" name="dob"  value="{{ Input::old('dob') }}" class="form-control date" placeholder="jj/mm/YYYY">
                            <p class="help-block">Format accepté: dd/mm/YYYY</p>
                            @if ($errors->has('dob')) <p class="help-block text-danger">{{ $errors->first('dob') }}</p> @endif
                        </div>
                    </div>

                    <script>
                        init.push(function () {
                            $('#image').pixelFileInput(
                                { placeholder: 'Aucun fichier selectionné...' }
                            );
                        })
                    </script>

                    <div class="form-group">
                        <label for="asdasdas" class="col-sm-2 control-label">Image</label>
                        <div class="col-sm-10">
                            <input capture="capture" accept="image/*" type="file" name="image" class="form-control" id="image" placeholder="http://">
                            @if ($errors->has('image')) <p class="help-block text-danger">{{ $errors->first('image') }}</p> @endif

                        </div>
                    </div> <!-- / .form-group -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Nationalité</label>
                        <div class="col-sm-10">
                            <div class="radio">
                                <label>
                                    <input @if (Input::old('nationality') == "fr") checked @endif type="radio" name="nationality" id="optionsRadios1" value="fr" class="px" checked="">
                                    <span class="lbl">Française</span>
                                </label>
                            </div> <!-- / .radio -->
                            <div class="radio">
                                <label>
                                    <input @if (Input::old('nationality') == "en") checked @endif  type="radio" name="nationality" id="optionsRadios2" value="en" class="px">
                                    <span class="lbl">Anglaise</span>
                                </label>
                            </div> <!-- / .radio -->
                            <div class="radio">
                                <label>
                                    <input type="radio" @if (Input::old('nationality') == "es") checked @endif  name="nationality" id="optionsRadios2-2" value="es" class="px">
                                    <span class="lbl">Espagnol</span>
                                </label>
                            </div> <!-- / .radio -->
                            <div class="radio">
                                <label>
                                    <input type="radio" @if (Input::old('nationality') == "al") checked @endif  name="nationality" id="optionsRadios2-2" value="al" class="px">
                                    <span class="lbl">Allemand</span>
                                </label>
                            </div>
                        </div> <!-- / .col-sm-10 -->
                    </div> <!-- / .form-group -->
                    <div class="form-group">
                        <label for="roles" class="col-sm-2 control-label">Film qui l'a joué</label>
                        <div class="col-sm-10">
                            <select id="acteurs" name="acteurs[]" multiple class="form-control">
                                @foreach($tab as $movie)
                                    <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('roles')) <p class="help-block text-danger">{{ $errors->first('roles') }}</p> @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="roles" class="col-sm-2 control-label">Rôles</label>
                        <div class="col-sm-10">
                            <select id="roles" name="roles" class="select2 form-control">
                                <option value="acteur">Acteur</option>
                                <option value="compositeur">Compositeur</option>
                                <option value="doublure">Doublure</option>
                                <option value="realisateur">Réalisateur</option>
                            </select>
                            @if ($errors->has('roles')) <p class="help-block text-danger">{{ $errors->first('roles') }}</p> @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="recompenses" class="col-sm-2 control-label">Récompenses</label>
                        <div class="col-sm-10">
                            <textarea name="recompenses" class="form-control">{{ Input::old('recompenses') }}</textarea>
                            @if ($errors->has('recompenses')) <p class="help-block text-danger">{{ $errors->first('recompenses') }}</p> @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="biography" class="col-sm-2 control-label">Biographie</label>
                        <div class="col-sm-10">
                            <textarea name="biography" id="biography" class="wyswyg form-control">{{ Input::old('biography') }}</textarea>
                            @if ($errors->has('biography')) <p class="help-block text-danger">{{ $errors->first('biography') }}</p> @endif
                        </div>
                    </div>
                    <!-- / .form-group -->
                    <div class="form-group" style="margin-bottom: 0;">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Créer un acteur</button>
                        </div>
                    </div> <!-- / .form-group -->

                </div>
            </form>
            <!-- /10. $FORM_EXAMPLE -->

        </div>
    </div>


@endsection