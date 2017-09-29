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
        
            @foreach($movies as $movie)
                
                <h2><a href="{{route('single-movie', ['id' => $movie->id])}}">{{$movie->title}}</a></h2>
                <p>{{$movie->storyline}}</p>
                
            @endforeach
        
    </body>
</html>
