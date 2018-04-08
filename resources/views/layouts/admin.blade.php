<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Infectologia') }}</title>
  <link href="{{ asset(mix('css/admin.css')) }}" rel="stylesheet">
  <script src="{{ asset(mix('js/admin.js')) }}"></script>
</head>
<body>
  <div id="app" style="display: none">
    <main class="l-admin">
      @yield('content')
    </main>
  </div>
</body>
</html>
