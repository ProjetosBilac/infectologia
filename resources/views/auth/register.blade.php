@extends('layouts.auth')

@section('content')
<div class="c-box">
  <form class="c-box__body" method="POST" action="{{ route('register') }}">
    @csrf

    <custom-input
      label="{{ __('Name') }}"
      identifier="name"
      warning="{{ $errors->first('name') }}"
      old-value="{{ old('name') }}">
    </custom-input>

    <custom-input
      label="{{ __('E-Mail Address') }}"
      identifier="email"
      warning="{{ $errors->first('email') }}"
      old-value="{{ old('email') }}">
    </custom-input>

    <custom-input
      label="{{ __('Password') }}"
      identifier="password"
      warning="{{ $errors->first('password') }}"
      old-value="{{ old('password') }}">
    </custom-input>

    <custom-input
      label="{{ __('Confirm Password') }}"
      identifier="password-confirm">
    </custom-input>

    <button type="submit">
      {{ __('Register') }}
    </button>

  </form>
</div>
@endsection
