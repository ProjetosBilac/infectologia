@extends('layouts.auth')

@section('content')
<div class="c-box">
  <form class="c-box__body" method="POST" action="{{ route('register') }}">
    @csrf

    <custom-input
      class="c-box__item"
      icon="user"
      label="{{ __('Name') }}"
      identifier="name"
      warning="{{ $errors->first('name') }}"
      old-value="{{ old('name') }}">
    </custom-input>

    <custom-input
      class="c-box__item"
      icon="at"
      label="{{ __('E-Mail Address') }}"
      identifier="email"
      warning="{{ $errors->first('email') }}"
      old-value="{{ old('email') }}">
    </custom-input>

    <custom-input
      class="c-box__item"
      icon="lock"
      label="{{ __('Password') }}"
      identifier="password"
      warning="{{ $errors->first('password') }}"
      old-value="{{ old('password') }}">
    </custom-input>

    <custom-input
      class="c-box__item"
      icon="lock"
      label="{{ __('Confirm Password') }}"
      identifier="password-confirm">
    </custom-input>

    <div class="c-box__item">
      <custom-checkbox></custom-checkbox>
      <p>Declaro que li e concordo com os termos de uso.</p>
    </div>

    <button class="btn is-primary c-box__item" type="submit">
      {{ __('Register') }}
    </button>

    <div class="c-box__group">
      <p>Ja possui conta?</p>
      <button class="btn is-secondary" type="button">Efetuar Login</button>
    </div>

  </form>
</div>
@endsection
