@extends('layout')


@section('content')
    <script>
        init.push(function () {
            $('#image').pixelFileInput(
                    { placeholder: 'Aucun fichier selectionné...' }
            );
        })
    </script>

    <br>
    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel panel-info">
            <div class="panel-heading">Création de film</div>
            <div class="panel-body">
                {!! Form::open(['route' => 'movies.store', 'files' => true]) !!}
                <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
                    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Votre nom de film']) !!}
                    {!! $errors->first('title', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('duree') ? 'has-error' : '' !!}">
                    {!! Form::text('duree', null, ['class' => 'form-control', 'placeholder' => 'Durée']) !!}
                    {!! $errors->first('duree', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('duree') ? 'has-error' : '' !!}">
                    {!! Form::text('date', null, ['class' => 'form-control', 'placeholder' => 'Date de sortie']) !!}
                    {!! $errors->first('duree', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('annee') ? 'has-error' : '' !!}">
                    {!! Form::text('annee', null, ['class' => 'form-control', 'placeholder' => 'Annee']) !!}
                    {!! $errors->first('annee', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                    {!! Form::file ('image', ['id' => 'image','class' => 'form-control', 'placeholder' => 'Votre message']) !!}
                    {!! $errors->first('image', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group">
                    {!! Form::select('categories_id',  $tab,null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::select('actors[]',  $tab2,null, ['class' => 'form-control',
                                                                'multiple' => 'multiple'
                                                                ]) !!}
                </div>
                <div class="form-group">
                    {!! Form::select('directors[]',  $tab3,null, ['class' => 'form-control',
                                                                'multiple' => 'multiple'
                                                                ]) !!}
                </div>
                <div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
                    {!! Form::textarea ('synopsis', null, ['class' => 'wyswyg form-control', 'placeholder' => 'Votre message']) !!}
                    {!! $errors->first('synopsis', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
                    {!! Form::textarea ('description', null, ['class' => 'wyswyg form-control', 'placeholder' => 'Votre message']) !!}
                    {!! $errors->first('description', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
                    {!! Form::textarea ('trailer', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}
                    {!! $errors->first('trailer', '<small class="help-block">:message</small>') !!}
                </div>


                {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop