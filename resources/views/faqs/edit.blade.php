@extends('layout')

@section('head')
    <link rel="stylesheet" href="{{ URL::asset('/css/createFaq.css') }}">
@endsection

@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <h1>Edit Frequently Asked Question</h1>

            <form id="editForm" method="post" action="/faq/{{$faq->id}}">
                @csrf
                @method('put')

                <div class="field">
                    <label class="label" for="question">Question</label>

                    <div class="control">
                        <input class="input" id="question" name="question" value="{{$faq->question}}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="answer">Answer</label>

                    <div class="control">
                        <textarea class="textarea resize-ta" id="answer" name="answer">{{$faq->answer}}</textarea>
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

            </form>

            <form id="deleteForm" class="deleteForm" method="POST" action="/faq/{{ $faq->id }}">
                @csrf
                @method('DELETE')
            </form>

            <button class="deleteButton" type="submit" form="deleteForm">Delete</button>
            <button class="submitButton" id="editButton" type="submit" form="editForm">Submit</button>

        </div>
    </div>
@endsection

