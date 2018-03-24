<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
  <script src="{{ asset(mix('js/app.js')) }}" defer></script>
</head>
<body>
  <div class="l-auth" id="app">
    <main class="l-auth__box">
      @yield('content')
    </main>
  </div>
</body>
</html>
