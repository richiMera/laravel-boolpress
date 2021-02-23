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
         <div class=" custom-checkbox mb-3">
            <input type="checkbox" class="custom-input" id="tag-{{$tag->id}}" name="tags[]" value="{{$tag->id}}">
            <label class="custom-label" for="tag-{{$tag->id}}">{{$tag->name}}</label>
        </div>
    @endforeach 

    <div class="form-group">
        <label class="" for="post_status">Stato del post</label>
        <select class="custom-select my-1 mr-sm-2" id="post_status" name="post_status">
          <option value="draft {{ old('post_status') == 'draft' ? 'selected' : ''}}">draft</option>
          <option value="public {{ old('post_status') == 'public' ? 'selected' : ''}}">public</option>
          <option value="private {{ old('post_status') == 'private' ? 'selected' : ''}}">private</option>
        </select>
    </div>

    <div class="form-group">
        <label class="" for="comment-status">Stato Commenti</label>
        <select class="custom-select my-1 mr-sm-2" id="comment_status" name="comment_status">
          <option value="open {{ old('comment_status') == 'open' ? 'selected' : ''}}">open</option>
          <option value="closed {{ old('comment_status') == 'closed' ? 'selected' : ''}}">closed</option>
        </select>
    </div>


    <input class="btn btn-dark" type="submit" value="invia">

    
</form>
</div>
@endsection