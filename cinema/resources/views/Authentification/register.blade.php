@extends('layout_logout')


@section('content')
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action=""  method="post" class="panel">
            {{--AATtention le champ caché  en POST est obligatoire--}}
            {{ csrf_field() }}

            <div class="panel-body">
                <div class="form-group">
                    <input type="text" name="email" value="{{ Input::old('email') }}" id="email" class="form-control input-lg" placeholder="Nom">
                </div>
                <div class="form-group">
                    <input type="text" name="email" value="{{ Input::old('email') }}" id="email" class="form-control input-lg" placeholder="Prénom">
                </div>
                <div class="form-group">
                    <input type="text" name="email" value="{{ Input::old('email') }}" id="email" class="form-control input-lg" placeholder="Ville">
                </div>
                <div class="form-group">
                    <input type="url" name="email" value="{{ Input::old('email') }}" id="email" class="form-control input-lg" placeholder="http://">
                </div>
                <div class="form-group">
                    <textarea name="email" value="{{ Input::old('email') }}" id="email" class="form-control input-lg" placeholder="Description"></textarea>
                </div>
                <div class="form-group">
                    <input type="email" name="email" value="{{ Input::old('email') }}" id="email" class="form-control input-lg" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="email" name="email" value="{{ Input::old('email') }}" id="email" class="form-control input-lg" placeholder="Mot de passe">
                </div>
                <div class="form-group">
                    <input type="email" name="email" value="{{ Input::old('email') }}" id="email" class="form-control input-lg" placeholder="Confirmation de Mot de passe">
                </div>
            </div>
            <div class="panel-footer text-right">
                <button class="btn btn-primary">Enregistrer un user</button>
            </div>
        </form>
        <!-- /6. $HORIZONTAL_FORM -->
@endsection