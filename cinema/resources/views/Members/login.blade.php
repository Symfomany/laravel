@extends('layout_logout')


@section('title')
    Création de user
@endsection

@section('content')


    <h1 class="form-header">Login du user</h1>

    <form id="signin-form_id" class="panel" novalidate="novalidate" action="" method="post" class="panel form-horizontal">

        <div class="form-group">
            <input type="email" autocomplete="off" name="email" value="{{ Input::old('email') }}" id="email" class="form-control input-lg" placeholder="Email">
        </div> <!-- / Username -->

        <div class="form-group">
            <input type="password" name="password" id="password_id" class="form-control input-lg" placeholder="Password">
        </div> <!-- / Password -->

        <div class="form-actions">
            <input type="submit" value="AUthentification" class="btn btn-primary btn-block btn-lg">
        </div> <!-- / .form-actions -->
        {{ csrf_field() }}
    </form>
@endsection