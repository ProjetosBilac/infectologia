@extends('layouts.auth')

@section('content')
<section class="c-box">
  <form class="c-box__body" method="POST" action="{{ route('login') }}">
    @csrf

    <custom-input
      class="c-box__item"
      icon="at"
      label="{{ __('E-Mail Address') }}"
      identifier="email"
      warning="{{ $errors->has('email') }}"
      old-value="{{ old('email') }}">
    </custom-input>

    <custom-input
      class="c-box__item"
      icon="lock"
      label="{{ __('Password') }}"
      identifier="password"
      warning="{{ $errors->has('password') }}"
      old-value="{{ old('password') }}">
    </custom-input>

    <div class="c-box__item">
      <custom-checkbox
        identifier="remember"
        old-value="{{ old('remember') ? 'checked' : '' }}"
        label="{{ __('Remember Me') }}">
      </custom-checkbox>
    </div>

    <button class="btn is-primary c-box__item" type="submit">
      {{ __('Login') }}
    </button>

    <a class="c-box__link" href="{{ route('password.request') }}">
      {{ __('Forgot Your Password?') }}
    </a>

    <div class="c-box__group">
      <p class="c-box__text">Não possui conta?</p>
      <a class="btn is-secondary" href="{{ route('register') }}">Cadastre-se</a>
    </div>
  </form>
</section>
@endsection
