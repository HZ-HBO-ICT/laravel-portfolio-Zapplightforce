@extends('layout')

@section('head')
    <link rel="stylesheet" href="{{ URL::asset('/css/createArticle.css') }}">
@endsection

@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <h1>Update Article</h1>

            <form id="editForm" method="post" action="/blog/{{$article->id}}">
                @csrf
                @method('put')

                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input class="input " id="title" name="title" value="{{$article->title}}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>

                    <div class="control">
                        <textarea class="textarea resize-ta" id="excerpt" name="excerpt">{{$article->excerpt}}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>

                    <div class="control">
                        <textarea class="textarea resize-ta" id="body" name="body">{{$article->body}}</textarea>
                    </div>
                </div>

            </form>

            <form id="deleteForm" method="POST" action="/blog/{{ $article->id }}">
                @csrf
                @method('DELETE')
            </form>

            <button class="deleteButton" type="submit" form="deleteForm">Delete</button>
            <button class="submitButton" id="editButton" type="submit" form="editForm">Submit</button>

        </div>
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('/js/script.js') }}"></script>
@endsection
