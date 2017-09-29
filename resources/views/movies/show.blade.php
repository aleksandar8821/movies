<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
        </style>
    </head>
    <body>
        
            <h2>{{$movie->title}}</h2>

            <ul>
                <li>genre: {{$movie->genre}}</li>
                <li>director: {{$movie->director}}</li>
                <li>year: {{$movie->year}}</li>
                <li>storyline: {{$movie->storyline}}</li>
            </ul>

        
    </body>
</html>
