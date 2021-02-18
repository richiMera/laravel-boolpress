<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <!-- Styles -->
        
    <body>
        <div class="container d-flex flex-wrap justify-content-between">
            @foreach ($posts as $post)
            
            <div class="card m-2 text-center" style="width:30%">
                <h2>{{$post->title}}</h2>
                <p>{{substr($post->content,0,1000)."..."}}</p>
                <small>{{$post->author}}</small>
            </div>
        
             @endforeach
        
        </div>
    </body>
</html>
