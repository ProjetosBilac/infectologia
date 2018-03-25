@extends('layouts.auth')

@section('content')
<div class="c-box">
  <form class="c-box__body" method="POST" action="{{ route('register') }}">
    @csrf

    <custom-input
      icon="user"
      label="{{ __('Name') }}"
      identifier="name"
      warning="{{ $errors->first('name') }}"
      old-value="{{ old('name') }}">
    </custom-input>

    <custom-input
      icon="at"
      label="{{ __('E-Mail Address') }}"
      identifier="email"
      warning="{{ $errors->first('email') }}"
      old-value="{{ old('email') }}">
    </custom-input>

    <custom-input
      icon="lock"
      label="{{ __('Password') }}"
      identifier="password"
      warning="{{ $errors->first('password') }}"
      old-value="{{ old('password') }}">
    </custom-input>

    <custom-input
      icon="lock"
      label="{{ __('Confirm Password') }}"
      identifier="password-confirm">
    </custom-input>

    <button type="submit">
      {{ __('Register') }}
    </button>

  </form>
</div>
@endsection
