@extends('layout_logout')


@section('title')
    Authentification
@endsection

@section('content')
    <h1 class="form-header">Regenerer son mot de passe</h1>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form id="signin-form_id" class="panel" novalidate="novalidate" action="" method="post" class="panel form-horizontal">
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group">
            <input type="email" name="email" value="{{ Input::old('email') }}" id="email" class="form-control input-lg" placeholder="Email">
        </div>

        <div class="form-group">
            <input type="email" name="password" value="{{ Input::old('email') }}" id="email" class="form-control input-lg" placeholder="Mot de passe">
        </div>
        <div class="form-group">
            <input type="email" name="password_confirmation" value="{{ Input::old('email') }}" id="email" class="form-control input-lg" placeholder="Confirmation de Mot de passe">
        </div>


        <div>
            <button class="btn btn-info" type="submit">
                Send Password Reset Link
            </button>
        </div>
        {{ csrf_field() }}
    </form>

    
@endsection