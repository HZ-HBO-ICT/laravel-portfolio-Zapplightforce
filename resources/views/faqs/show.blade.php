@extends('layout')

@section('head')
    <link rel="stylesheet" href="{{ URL::asset('/css/showFaq.css') }}">
@endsection

@section('content')
    <body>

    <br>
    <br>
    <h1>{{$faq->question}}</h1>

    <br>
    <br>

    <p>{{$faq->answer}}</p>

    <br>
    <br>

    <form method="get" action="/faq/{{$faq->id}}/edit">
        <div class="field is-grouped">
            <button class="submitButton" type="submit">Edit</button>
        </div>
    </form>

    </body>
@endsection
