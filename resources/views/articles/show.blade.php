@extends('layout')

@section('content')
    <body>

    <h1>{{$article->title}}</h1>

    <img class="articlePic" src="{{$article->image_Link}}">

    <p>{{$article->body}}</p>

    </body>
@endsection
