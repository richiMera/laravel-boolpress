@extends('layouts.main')

@section('content')
<div class="container">
    <table class="table table-dark">
        <tbody>
                @foreach ($post->getAttributes() as $key => $value)
                    <tr>
                        <td>{{$key}}</td>
                        <td>{{$value}}</td>
                    </tr>
                @endforeach
        </tbody>
    </table>
    {{-- <a class="btn btn-primary" href="{{route('articles.index')}}">Torna alla Lista</a> --}}
</div>
@endsection