@extends('layouts.auth')

@section('content')
<section class="c-box">

  <form class="c-box__body" method="POST" action="{{ route('register') }}">
    @csrf

    <custom-svg
      css-class="c-logo is-animated"
      filepath="{{ asset('svgs/logo.svg') }}">
    </custom-svg>

    <h3 class="c-box__title">Cadastre-se</h3>

    <custom-input
      class="c-box__item"
      icon="user"
      label="{{ __('Name') }}"
      identifier="name"
      warning="{{ $errors->first('name') }}"
      old-value="{{ old('name') }}"
      required="true">
    </custom-input>

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

    <custom-input
      class="c-box__item"
      icon="lock"
      label="{{ __('Password') }}"
      identifier="password"
      warning="{{ $errors->first('password') }}"
      old-value="{{ old('password') }}"
      field-type="password"
      required="true">
    </custom-input>

    <custom-input
      class="c-box__item"
      icon="lock"
      label="{{ __('Confirm Password') }}"
      identifier="password-confirm"
      field-type="password"
      required="true">
    </custom-input>

    <div class="c-box__item">
      <custom-checkbox
        label="Declaro que li e concordo com os termos de uso.">
      </custom-checkbox>
    </div>

    <button class="btn is-primary c-box__item" type="submit">
      {{ __('Register') }}
    </button>

    <div class="c-box__group">
      <p class="c-box__text">Ja possui conta?</p>
      <a class="btn is-secondary" href="{{ route('login') }}">Efetuar Login</a>
    </div>

  </form>
</section>
@endsection
