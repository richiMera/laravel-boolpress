@extends('layouts.main')

@section('content')
    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>SUBTITLE</th>
                    <th>AUTHOR</th>
                    <th>S_COMMENT</th>
                    <th>S_POST</th>
                    <th>TAGS</th>
                </tr>
           </thead>
            <tbody>
                 @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->subtitle}}</td>
                    <td>{{$post->author}}</td>
                    <td> {{$post->infoPost->comment_status}}</td>
                    <td>{{$post->infoPost->post_status}}</td>
                    <td>
                        @foreach ($post->tags as $tag)
                            {{$tag->name}}
                        @endforeach
                    </td>
                    <td><a href="{{route('posts.show', $post->id)}}" class="btn btn-info">Mostra</a></td>
                    <td><a href="{{route('posts.edit', $post->id)}}" class="btn btn-success">Edit</a></td>
                    <td>
                        <form action="{{route('posts.destroy', $post->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        
                    </td> 
               </tr>
                @endforeach
            </tbody>
        </table>  
        <a class="btn btn-dark" href="{{route('posts.create')}}">Crea Nuovo</a>
     </div>
    </div>
@endsection