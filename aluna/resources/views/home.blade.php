@extends('layout2')

@section('content')
<div class="container">
  	@include('partials/errors')

  <form class="login-form" role="form" method="POST" action="{{ route('login') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input name="email" type="email" value="{{ old('email') }}" class="form-control" placeholder="{{ trans('auth.userName') }}" autofocus>



        </div>
        <div class="input-group">
            <span class="input-group-addon"><i class="icon_key_alt"></i></span>
            <input name="password" type="password" class="form-control" placeholder="{{ trans('auth.password') }}">

        </div>
        <label class="checkbox">
            <input type="checkbox" value="remember-me"> {{ trans('auth.rememberMe') }}
            <span class="pull-right"> <a href="password"> {{ trans('auth.forgotPassword') }}</a></span>
        </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">{{ trans('auth.login') }}</button>

    </div>
  </form>

</div>

@endsection
