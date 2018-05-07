@extends('layouts.auth')

@section('content')
<section class="c-box has-strip">
  <form class="c-box__body"
        method="POST"
        action="{{ route('password.email') }}">

    @if (session('status'))
    <div class="c-box__alert alert alert-success">
      {{ session('status') }}
    </div>
    @endif

    @csrf

    <custom-svg
      css-class="c-logo is-animated c-box__item is-with-centralized-content"
      filepath="{{ asset('svgs/logo.svg') }}">
    </custom-svg>

    <h3 class="c-box__title">Mudança de Senha</h3>

    <custom-input
      class="c-box__item is-with-centralized-content"
      icon="at"
      label="E-Mail"
      identifier="email"
      warning="{{ $errors->first('email') }}"
      old-value="{{ old('email') }}"
      field-type="email"
      required="true">
    </custom-input>

    <button class="btn is-primary c-box__item is-with-centralized-content" type="submit">
      Enviar Link de Mudança de Senha
    </button>

    <div class="c-box__item is-with-the-content-justified">
      <p class="c-box__text">Lembrou sua senha?</p>
      <a class="btn is-secondary"
         href="{{ route('login') }}"
         @click="getOut($event, '{{ route('login') }}')">Efetuar Login</a>
    </div>
  </form>
</section>
@endsection
