@extends('layouts.main')

@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
 @endif
<form action="{{route('posts.store')}}" method="post">

    @csrf
    @method('POST')
    <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" name="title" id="title"  placeholder="">
    </div>
    <div class="form-group">
        <label for="subtitle">subtitle</label>
        <input type="text" class="form-control" name="subtitle" id="subtitle"  placeholder="">
    </div>
    <div class="form-group">
        <label for="author">author</label>
        <input type="text" class="form-control" name="author" id="author"  placeholder="">
    </div>
    <div class="form-group">
        <label for="content">Nuovo articolo</label>
        <textarea class="form-control" name="content" id="content" rows="6"></textarea>
    </div>

    <h3>Tags</h3>
    @foreach ($tags as $tag)
         <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" id="tag-{{$tag->id}}" name="tags[]">
            <label class="custom-control-label" for="tag-{{$tag->id}}" value="tag-{{$tag->id}}">{{$tag->name}}</label>
        </div>
    @endforeach

    <h3>Categories</h3>
    @foreach ($infos as $info)
        <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" id="tag-{{$info->id}}" name="tags[]">
             <label class="custom-control-label" for="tag-{{$info->id}}" value="tag-{{$info->id}}">{{$info->category}}</label>
        </div>
    @endforeach

    <input class="btn btn-dark" type="submit" value="invia">

    
</form>
</div>
@endsection