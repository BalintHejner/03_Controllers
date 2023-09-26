<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Layout Demo</title>
    @include('layouts.css')
</head>
<body>
    @include('layouts.header')

    @include('layouts.nav')

    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
@include('layouts.js')
</body>
</html>
