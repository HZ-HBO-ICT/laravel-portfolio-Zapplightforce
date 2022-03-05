@extends('layout')

@section('head')
    <link rel="stylesheet" href="{{ URL::asset('/css/createArticle.css') }}">
@endsection
@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Article</h1>

            <form method="post" action="/blog">
                @csrf

                <div class="field">
                    <label class="label" for="title">Title</label>

                    <div class="control">
                        <input class="input" id="title" name="title">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>

                    <div class="control">
                        <textarea class="textarea resize-ta" id="excerpt" name="excerpt"></textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>

                    <div class="control">
                        <textarea class="textarea resize-ta" id="body" name="body"></textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <button class="submitButton" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
