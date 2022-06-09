<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=" { { asset ( ' css/app.css' ) } } ">
    @yield('custom-class')
    
    <!-- Styles -->
    <style>
        html,
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>

    @include('partials.header')

    <main>
        <h2>Here are some links to help you get started:</h2>

    </main>

    @include('partials.footer')

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>