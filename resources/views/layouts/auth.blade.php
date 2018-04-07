<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
  <script src="{{ asset(mix('js/auth.js')) }}"></script>
</head>
<body>
  <div id="app" style="display: none">
    <div :class="['l-auth', { 'is-outing': goingOut }]">
      <main :class="['l-auth__box', { 'is-outing': goingOut }]">
        @yield('content')
      </main>
    </div>
  </div>
</body>
</html>
