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
                        <input class="input" id="question" name="question">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="answer">Answer</label>

                    <div class="control">
                        <textarea class="textarea resize-ta" id="answer" name="answer"></textarea>
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

