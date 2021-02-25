@extends('layouts.main')

@section('content')

    <div class="show_container">
        <div class="show_wrapper">
            <div class="show_title_box">
                <h2 class="show_title">
                    {{$post->title}}
                </h2>
            </div>
            <h3 class="text-center my-5">{{$post->subtitle}}</h3>
            <p>di <strong>{{$post->author}} - </strong>{{$post->content}}</p>
            
            <div class="comments_container my-5">
                <h4>Commenti</h4>
                @foreach ($post->comments as $comment)
                    <div class="comment">
                        <strong>{{$comment->user_name}}</strong>
                        <p>{{$comment->text}}</p>
                    </div>
                    <div class="comment_action">
                        <small>Mi piace</small>
                        <small>Rispondi</small>
                        <small>{{$comment->created_at}}</small>
                    </div>
                @endforeach
            </div>
        </div>

        <a class="btn btn-primary mb-3" href="{{route('posts.index')}}">Torna alla Lista</a>
    </div>

@endsection