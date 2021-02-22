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
                    <th>CATEGORY</th>
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
                    <td> {{$post->infoPost->category}} </td>
                    <td><a href="{{route('posts.show', $post->id)}}" class="btn btn-secondary">Mostra</a></td>
                    {{-- <td><a href="{{route('beers.edit', $beer->id)}}" class="btn btn-secondary">Edit</a></td>
                    <td>
                        <form action="{{route('beers.destroy', $beer->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                        
                    </td>  --}}
               </tr>
                @endforeach
            </tbody>
        </table>  
        {{-- <a class="btn btn-dark" href="{{route('beers.create')}}">Crea Nuovo</a> --}}
     </div>
    </div>
@endsection