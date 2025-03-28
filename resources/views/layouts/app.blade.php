<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name') }}</title>

    @include('partials.meta')

    @include('partials.css')
</head>

<body class="mad-body--scheme-brown">

@include('partials.header')

@yield('content')

@include('partials.footer')

@include('partials.js')
</body>
</html>
