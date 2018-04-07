@extends('layouts.auth')

@section('content')
<section class="c-box">
  <form class="c-box__body" method="POST" action="{{ route('password.email') }}">
    @if (session('status'))
      <div class="c-box__alert alert alert-success">
        {{ session('status') }}
      </div>
    @endif
    @csrf

    <custom-svg
      css-class="c-logo is-animated"
      filepath="{{ asset('svgs/logo.svg') }}">
    </custom-svg>

    <h3 class="c-box__title">{{ __('Reset Password') }}</h3>

    <custom-input
      class="c-box__item"
      icon="at"
      label="{{ __('E-Mail Address') }}"
      identifier="email"
      warning="{{ $errors->first('email') }}"
      old-value="{{ old('email') }}"
      field-type="email"
      required="true">
    </custom-input>

    <button class="btn is-primary c-box__item" type="submit">
      {{ __('Send Password Reset Link') }}
    </button>

    <div class="c-box__group">
      <p class="c-box__text">Lembrou sua senha?</p>
      <a class="btn is-secondary"
         href="{{ route('login') }}"
         @click="getOut($event, '{{ route('login') }}')">Efetuar Login</a>
    </div>
  </form>
</section>
@endsection
