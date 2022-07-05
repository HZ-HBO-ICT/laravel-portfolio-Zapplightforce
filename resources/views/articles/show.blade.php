@extends('layout')

@section('head')
    <link rel="stylesheet" href="{{ URL::asset('/css/showArticle.css') }}">
@endsection

@section('content')
    <body>

    <br>
    <br>

    <h1>{{$article->title}}</h1>

    <br>
    <br>

    <img class="articlePic" src="{{$article->image_Link}}">

    <br>
    <br>

    <p>{{$article->body}}</p>

    <br>
    <br>

    <form method="get" action="/blog/{{$article->id}}/edit">
        <div class="field is-grouped">
            <button class="submitButton" type="submit">Edit</button>
        </div>
    </form>

    </body>
@endsection
