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
    <div class="l-admin">
    <!-- Adiciona o atributo para o nome do usuario, {{ Auth::user()->name }} -->
      <toolbar class="l-admin__nav"></toolbar>
      <main class="l-admin__main">
        @yield('content')
      </main>
    </div>
  </div>
</body>
</html>
