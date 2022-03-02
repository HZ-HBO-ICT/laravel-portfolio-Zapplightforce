@extends('layout')

@section('content')

    <div class="sidebar">
        <ul class="sideUl">
            @foreach($articles as $article)
            <li class="blogObj">
                <h3 class="sideH3"><a class="sideA" href="/blog/{{$article->id}}">{{$article->title}}</a></h3>
                <img class="blogPic" src="{{$article->image_Link}}">
                <p class="sideP">{{$article->excerpt}}</p>
            </li>
            @endforeach
        </ul>
    </div>

@endsection
