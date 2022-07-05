@extends('layout')

@section('head')
    <link rel="stylesheet" href="{{ URL::asset('/css/ArticleIndex.css') }}">
@endsection

@section('content')
<br>
<br>
    <h1>Welcome to my Blog</h1>
<br>
<br>
    <div>
        <table class="indexTable">
            <td class="indexData">
                <h3 class="indexH3"><a class="sideA" href="/blog/create">Create new Article</a></h3>
                <img class="blogPic" src="/images/BlogPic.jpeg">
                <p class="indexP">Add your own unique article and publish it on this site.</p>
            </td>
            @foreach($articles as $article)
                @if (!is_int($loop->iteration / 3) )

                        <td class="indexData">
                            <h3 class="indexH3"><a class="sideA" href="/blog/{{$article->id}}">{{$article->title}}</a></h3>
                            <img class="blogPic" src="{{$article->image_Link}}">
                            <p class="indexP">{{$article->excerpt}}</p>
                        </td>

                    @endif
                    @if (is_int($loop->iteration / 3) )
                        <tr class="indexRow"></tr>
                        <td class="indexData">
                            <h3 class="indexH3"><a class="sideA" href="/blog/{{$article->id}}">{{$article->title}}</a></h3>
                            <img class="blogPic" src="{{$article->image_Link}}">
                            <p class="indexP">{{$article->excerpt}}</p>
                        </td>
                    @endif
            @endforeach
        </table>
    </div>

@endsection
