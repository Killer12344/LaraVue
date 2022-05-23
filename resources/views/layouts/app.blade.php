<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/imagehover.css/2.0.0/css/imagehover.min.css">
</head>
<body>

    <main id="app">
        <navbar-component></navbar-component>
        <div class="container-fluid">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </main>

    <script src="{{ asset('js/jquery.js')  }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('script')
</body>
</html>
