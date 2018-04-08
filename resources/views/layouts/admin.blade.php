<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title'){{ config('app.name', 'Infectologia') }}</title>
    <!-- Styles -->
@stack('HeaderScripts')

</head>
<body>
    @yield('content')
    <!-- Scripts -->
    @stack('FooterScripts')
</body>
</html>
