@extends('layout_logout')


@section('title')
    Authentification
@endsection

@section('content')


    <h1 class="form-header">Se connecter à son compte</h1>

    <form id="signin-form_id" class="panel" novalidate="novalidate" action="" method="post" class="panel form-horizontal">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            <input type="email" name="email" value="{{ Input::old('email') }}" id="email" class="form-control input-lg" placeholder="Email">
        </div> <!-- / Username -->

        <div class="form-group signin-password">
            <input type="password" name="password" id="password_id" class="form-control input-lg" placeholder="Password">
            <a href="#" class="forgot">Forgot?</a>
        </div> <!-- / Password -->

        <div class="row">
            <input type="checkbox" name="remember"> Se souvenir de moi
        </div>

        <div class="form-actions">
            <input type="submit" value="Connexion" class="btn btn-primary btn-block btn-lg">
        </div> <!-- / .form-actions -->
        {{ csrf_field() }}
    </form>
@endsection