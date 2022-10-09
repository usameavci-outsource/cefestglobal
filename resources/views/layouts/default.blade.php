@props([
    'head' => '',
])
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    <base href="{{ asset('') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Assets -->
    {{-- @vite(['resources/css/app.css'])--}}

    {{ $head }}
</head>
<body class="antialiased">
{{ $slot }}

@vite(['resources/js/app.js'])
@include('sweetalert::alert')
</body>
</html>