@extends('layout')

@section('head')
    <link rel="stylesheet" href="{{ URL::asset('/css/study.css') }}">
@endsection

@section('content')
<body>
<br>
<br>
<br>

    <h1>Programme overview</h1>

<br>
<br>

    <table class="sty_table">
        <tr>
            <th class="sty_th">Quartile</th>
            <th class="sty_th">Course</th>
            <th class="sty_th">EC</th>
            <th class="sty_th">Exam</th>
            <th class="sty_th">Grade</th>
        </tr>
        <tr>
            <td class="sty_td" rowspan="3"><b>1st</b></td>
            <td class="sty_td">Programme and Career Orientation</td>
            <td class="sty_td">2,5</td>
            <td class="sty_td">Assessment exam</td>
            <td class="sty_td">

                <form id="editForm" method="post" action="/study/{{$grades[0]->id}}">
                    @csrf
                    @method('put')
                    <input type="text" name="grade" value="{{$grades[0]->grade}}" id="grade">
                    <input type="submit" hidden />
                </form>

            </td>
        </tr>
        <tr>
            <td class="sty_td">Computer Science Basics</td>
            <td class="sty_td">5</td>
            <td class="sty_td">Written exam</td>
            <td class="sty_td">

                <form id="editForm" method="post" action="/study/{{$grades[1]->id}}">
                    @csrf
                    @method('put')
                    <input type="text" name="grade" value="{{$grades[1]->grade}}" id="grade">
                    <input type="submit" hidden />
                </form>
            </td>
        </tr>
        <tr>
            <td class="sty_td">Programming Basics</td>
            <td class="sty_td">5</td>
            <td class="sty_td">Case study</td>
            <td class="sty_td">
                <form id="editForm" method="post" action="/study/{{$grades[2]->id}}">
                    @csrf
                    @method('put')
                    <input type="text" name="grade" value="{{$grades[2]->grade}}" id="grade">
                    <input type="submit" hidden />
                </form>
            </td>
        </tr>
        <tr>
            <td class="sty_td" rowspan="2"><b>2nd</b></td>
            <td class="sty_td" rowspan="2">Object Oriented Programming</td>
            <td class="sty_td" rowspan="2">10</td>
            <td class="sty_td">Case study</td>
            <td class="sty_td">
                <form id="editForm" method="post" action="/study/{{$grades[3]->id}}">
                    @csrf
                    @method('put')
                    <input type="text" name="grade" value="{{$grades[3]->grade}}" id="grade">
                    <input type="submit" hidden />
                </form>
            </td>
        </tr>
        <tr>
            <td class="sty_td">Project</td>
            <td class="sty_td">
                <form id="editForm" method="post" action="/study/{{$grades[4]->id}}">
                    @csrf
                    @method('put')
                    <input type="text" name="grade" value="{{$grades[4]->grade}}" id="grade">
                    <input type="submit" hidden />
                </form>
            </td>
        </tr>
        <tr>
            <td class="sty_td" rowspan="4"><b>3rd</b></td>
            <td class="sty_td">Framework Developement 1</td>
            <td class="sty_td">5</td>
            <td class="sty_td">Case study</td>
            <td class="sty_td">
                <form id="editForm" method="post" action="/study/{{$grades[5]->id}}">
                    @csrf
                    @method('put')
                    <input type="text" name="grade" value="{{$grades[5]->grade}}" id="grade">
                    <input type="submit" hidden />
                </form>
            </td>
        </tr>
        <tr>
            <td class="sty_td" rowspan="3">Framework Developement 2</td>
            <td class="sty_td" rowspan="3">7.5</td>
            <td class="sty_td">Project</td>
            <td class="sty_td">
                <form id="editForm" method="post" action="/study/{{$grades[6]->id}}">
                    @csrf
                    @method('put')
                    <input type="text" name="grade" value="{{$grades[6]->grade}}" id="grade">
                    <input type="submit" hidden />
                </form>
            </td>
        </tr>
        <tr>
            <td class="sty_td">Assessment</td>
            <td class="sty_td">
                <form id="editForm" method="post" action="/study/{{$grades[7]->id}}">
                    @csrf
                    @method('put')
                    <input type="text" name="grade" value="{{$grades[7]->grade}}" id="grade">
                    <input type="submit" hidden />
                </form>
            </td>
        </tr>
        <tr>
            <td class="sty_td">Report</td>
            <td class="sty_td">
                <form id="editForm" method="post" action="/study/{{$grades[8]->id}}">
                    @csrf
                    @method('put')
                    <input type="text" name="grade" value="{{$grades[8]->grade}}" id="grade">
                    <input type="submit" hidden />
                </form>
            </td>
        </tr>
        <tr>
            <td class="sty_td" rowspan="3"><b>4th</b></td>
            <td class="sty_td" rowspan="3">Framework Project 2</td>
            <td class="sty_td" rowspan="3">10</td>
            <td class="sty_td">Portfolio</td>
            <td class="sty_td">
                <form id="editForm" method="post" action="/study/{{$grades[9]->id}}">
                    @csrf
                    @method('put')
                    <input type="text" name="grade" value="{{$grades[9]->grade}}" id="grade">
                    <input type="submit" hidden />
                </form>
            </td>
        </tr>
        <tr>
            <td class="sty_td">Project</td>
            <td class="sty_td">
                <form id="editForm" method="post" action="/study/{{$grades[10]->id}}">
                    @csrf
                    @method('put')
                    <input type="text" name="grade" value="{{$grades[10]->grade}}" id="grade">
                    <input type="submit" hidden />
                </form>
            </td>
        </tr>
        <tr>
            <td class="sty_td">Assessment</td>
            <td class="sty_td">
                <form id="editForm" method="post" action="/study/{{$grades[11]->id}}">
                    @csrf
                    @method('put')
                    <input type="text" name="grade" value="{{$grades[11]->grade}}" id="grade">
                    <input type="submit" hidden />
                </form>
            </td>
        </tr>
        <tr>
            <th class="sty_th">"the entire year"</th>
            <td class="sty_td">Professional Developement</td>
            <td class="sty_td">12.5</td>
            <td class="sty_td">Portfolio</td>
            <td class="sty_td">
                <form id="editForm" method="post" action="/study/{{$grades[12]->id}}">
                    @csrf
                    @method('put')
                    <input type="text" name="grade" value="{{$grades[12]->grade}}" id="grade">
                    <input type="submit" hidden />
                </form>
            </td>
        </tr>
        <tr>
            <th class="sty_th" rowspan="2">"Whenever"</th>
            <td class="sty_td">Personality 1</td>
            <td class="sty_td">1.25</td>
            <td class="sty_td">Portfolio</td>
            <td class="sty_td">
                <form id="editForm" method="post" action="/study/{{$grades[13]->id}}">
                    @csrf
                    @method('put')
                    <input type="text" name="grade" value="{{$grades[13]->grade}}" id="grade">
                    <input type="submit" hidden />
                </form>
            </td>
        </tr>
        <tr>
            <td class="sty_td">Personality 2</td>
            <td class="sty_td">1.25</td>
            <td class="sty_td">Portfolio</td>
            <td class="sty_td">
                <form id="editForm" method="post" action="/study/{{$grades[14]->id}}">
                    @csrf
                    @method('put')
                    <input type="text" name="grade" value="{{$grades[14]->grade}}" id="grade">
                    <input type="submit" hidden />
                </form>
            </td>
        </tr>
    </table>

<br>
<br>
    <div id="myProgress">
        <div id="myBar">0%</div>
    </div>
<br>
<br>
</body>
@endsection

@section('script')
    <script src="{{ URL::asset('/js/study.js') }}"></script>
@endsection
