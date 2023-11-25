<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
    @include('partials.navbar')
    <div class="container">
        @yield('content')
    </div>
    @include('partials.footer')
</body>
</html>