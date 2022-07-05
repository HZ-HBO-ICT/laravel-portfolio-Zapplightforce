@extends('layout')

@section('head')
    <link rel="stylesheet" href="{{ URL::asset('/css/createFaq.css') }}">
@endsection

@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Frequently Asked Question</h1>

            <form method="post" action="/faq">
                @csrf

                <div class="field">
                    <label class="label" for="question">Question</label>

                    <div class="control">
                        <input class="input @error('question') is-danger-box @enderror"
                               id="question"
                               name="question"
                               value="{{old('question')}}">

                        @error('question')
                        <p class="help is-danger">{{$errors->first('question')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="answer">Answer</label>

                    <div class="control">
                        <textarea class="textarea resize-ta @error('answer') is-danger-box @enderror" id="answer" name="answer"></textarea>

                        @error('answer')
                        <p class="help is-danger">{{$errors->first('answer')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="categories">Choose a category:</label>

                    <select class="input" id="categories" name="categories">
                        <option value="general">General</option>
                        <option value="hzUniversity">HZ University</option>
                        <option value="ict">Information and Communication Technology</option>
                        <option value="middelburg">Middelburg</option>
                    </select>
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
