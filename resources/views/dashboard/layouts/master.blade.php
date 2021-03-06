<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

        @include('dashboard.layouts.navbar')
        <div class="container-fluid" id="app">
            <div class="container">
                @yield('content')
            </div>
        </div>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('script')
</body>
</html>
