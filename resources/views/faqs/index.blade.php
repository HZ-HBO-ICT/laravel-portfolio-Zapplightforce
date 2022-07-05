@extends('layout')

@section('head')
    <link rel="stylesheet" href="{{ URL::asset('/css/faqIndex.css') }}">
@endsection

@section('content')
<body>
<br>
<br>
<br>

    <h1>Frequently asked Questions</h1>

<br>
<br>

  <table class="faq_table">
        <tr class="faqRow">

            <td class="category">
                <h3 class="faqH3">General</h3>
                <ul class="faqList">
                @foreach($general as $general)
                    <li class="faqList">
                <a class="question" href="/faq/{{$general->id}}">{{$general->question}}</a>
                    </li>
                @endforeach
                </ul>
            </td>

            <td class="category" id="rightCoulomb">
                <h3 class="faqH3">HZ University</h3>
                <ul class="faqList">
                @foreach($hzUniversity as $hzUniversity)
                        <li class="faqList">
                        <a class="question" href="/faq/{{$hzUniversity->id}}">{{$hzUniversity->question}}</a>
                        </li>
                @endforeach
                </ul>
            </td>
        </tr>

      <tr class="faqRow">
          <td class="category">
              <h3 class="faqH3">Information and Communication Technology</h3>

              <ul class="faqList">
              @foreach($ict as $ict)
                      <li class="faqList">
                      <a class="question" href="/faq/{{$ict->id}}">{{$ict->question}}</a>
                      </li>
              @endforeach
              </ul>
          </td>

          <td class="category" id="rightCoulomb">

              <h3 class="faqH3">Middelburg</h3>

              <ul class="faqList">
              @foreach($middelburg as $middelburg)
                      <li class="faqList">
                      <a class="question" href="/faq/{{$middelburg->id}}">{{$middelburg->question}}</a>
                      </li>
              @endforeach
              </ul>
          </td>
      </tr>
    </table>

 <form method="get" action="/faq/create">
    <div class="field is-grouped">
        <button class="newQuestionButton" type="submit">New Question</button>
    </div>
</form>

<br>
<br>

</body>
@endsection
