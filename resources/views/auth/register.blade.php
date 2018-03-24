@extends('layouts.auth')

@section('content')
<div>
  <div>{{ __('Register') }}</div>
  <div>
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <!-- name -->
      <div>
        <label for="name">{{ __('Name') }}</label>
        <div>
          <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
          @if ($errors->has('name'))
            <span>
              <strong>{{ $errors->first('name') }}</strong>
            </span>
          @endif
        </div>
      </div>

      <!-- e-mail -->
      <div>
        <label for="email">{{ __('E-Mail Address') }}</label>
        <div>
          <input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
          @if ($errors->has('email'))
            <span>
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>
      </div>

      <!-- password -->
      <div>
        <label for="password">{{ __('Password') }}</label>
        <div>
          <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
          @if ($errors->has('password'))
            <span>
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
        </div>
      </div>

      <!-- confirm password -->
      <div>
        <label for="password-confirm">{{ __('Confirm Password') }}</label>
        <div>
          <input id="password-confirm" type="password" name="password_confirmation" required>
        </div>
      </div>

      <!-- register -->
      <div>
        <div>
          <button type="submit">
            {{ __('Register') }}
          </button>
        </div>
      </div>

    </form>
  </div>
</div>
@endsection
