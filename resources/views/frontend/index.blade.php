<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" value="{{ csrf_token() }}">

        <title>Forum</title>
        <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet">
        
        <!-- Import Ionicon icons & Google Fonts our Bootstrap theme relies on -->
        <link href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
        <link href="//fonts.googleapis.com/css?family=Titillium+Web:700|Source+Serif+Pro:400,700|Merriweather+Sans:400,700|Source+Sans+Pro:400,300,600,700,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

        <!-- Import the custom Bootstrap 4 theme from our hosted CDN -->
        <link rel="stylesheet" href="//demo.productionready.io/main.css">

    </head>
    <body>
        <div id="app"></div>

        <script src="{{ asset('frontend/js/app.js') }}"></script>
    </body>
</html>