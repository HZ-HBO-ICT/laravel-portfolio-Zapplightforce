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
                        <input
                            class="input @error('title') is-danger-box @enderror"
                            id="title"
                            name="title"
                            value="{{old('title')}}">

                        @error('title')
                        <p class="help is-danger">{{$errors->first('title')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Excerpt</label>

                    <div class="control">
                        <textarea
                            class="textarea resize-ta @error('excerpt') is-danger-box @enderror"
                            id="excerpt"
                            name="excerpt"
                            >{{old('excerpt')}}</textarea>

                        @error('excerpt')
                        <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="body">Body</label>

                    <div class="control">
                        <textarea
                            class="textarea resize-ta @error('body') is-danger-box @enderror"
                            id="body"
                            name="body"
                        >{{old('body')}}</textarea>

                        @error('body')
                        <p class="help is-danger">{{$errors->first('body')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field is-grouped">
                    <button class="submitButton" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('/js/script.js') }}"></script>
@endsection
