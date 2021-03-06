<!DOCTYPE html>
<html lang="en" prefix="fb: http://www.facebook.com/2008/fbml">
<head>
    <title>{{config('app.name', 'Pollish')}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="{{ secure_asset('css/style.css') }}" media="all" rel="stylesheet" type="text/css" />
    <style media="screen">
        #fb_login{margin-top: 12px}
    </style>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>

</head>
    <body>
        @yield('content')
    </body>
</html>
