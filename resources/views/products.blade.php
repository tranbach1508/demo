<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel React application</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('bs4/css/bootstrap.min.css') }}">
    </head>
    <body>
    <div class="container" id="app">
        
    </div>
    <script src="{{ asset('bs4/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>