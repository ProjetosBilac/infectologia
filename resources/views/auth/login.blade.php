@extends('layouts.auth')

@section('content')
<section class="c-box has-strip">
  <form class="c-box__body"
        :id="formId"
        method="POST"
        @submit="getOut"
        action="{{ route('login') }}">

    @csrf

    <div class="c-box__item">
      <custom-svg
        css-class="c-logo is-animated is-with-centralized-content"
        filepath="{{ asset('svgs/logo.svg') }}">
      </custom-svg>
    </div>

    <div class="c-box__item is-with-centralized-content">
      <h3 class="c-box__title">Faça seu login</h3>
    </div>

    <custom-input
      class="c-box__item is-with-centralized-content"
      icon="at"
      label="Email"
      identifier="email"
      warning="{{ $errors->first('email') }}"
      old-value="{{ old('email') }}"
      field-type="email"
      required="true">
    </custom-input>

    <custom-input
      class="c-box__item is-with-centralized-content"
      icon="lock"
      label="Senha"
      identifier="password"
      warning="{{ $errors->first('password') }}"
      old-value="{{ old('password') }}"
      field-type="password"
      required="true">
    </custom-input>

    <custom-checkbox
      class="c-box__item is-with-content-to-left"
      identifier="remember"
      old-value="{{ old('remember') ? 'checked' : '' }}"
      label="Lembrar-me">
    </custom-checkbox>

    <button class="btn is-primary c-box__item is-with-centralized-content" type="submit">
      {{ __('Login') }}
    </button>

    <a class="c-box__link c-box__item is-with-content-to-left"
       href="{{ route('password.request') }}"
       @click="getOut($event, '{{ route('password.request') }}')">
      Esqueceu sua senha ?
    </a>

    <div class="c-box__item is-with-the-content-justified">
      <p class="c-box__text">Não possui conta?</p>
      <a class="btn is-secondary"
         href="{{ route('register') }}"
         @click="getOut($event, '{{ route('register') }}')">Cadastre-se</a>
    </div>
  </form>
</section>
@endsection
