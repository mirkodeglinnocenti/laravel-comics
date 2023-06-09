<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>

    @include('partials.header')

    <main class="bg-light">
        {{-- contenuto --}}
        @yield('content')
    </main>

    @include('partials.footer')
    
</body>
</html>