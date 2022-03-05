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
            <td class="sty_td"><input onclick="grades(grade1, 4.17)" type="button" value="/-----/" id="grade1" class="grades"></td>
        </tr>
        <tr>
            <td class="sty_td">Computer Science Basics</td>
            <td class="sty_td">5</td>
            <td class="sty_td">Written exam</td>
            <td class="sty_td"><input onclick="grades(grade2, 8.33)" type="button" value="/-----/" id="grade2" class="grades"></td>
        </tr>
        <tr>
            <td class="sty_td">Programming Basics</td>
            <td class="sty_td">5</td>
            <td class="sty_td">Case study</td>
            <td class="sty_td"><input onclick="grades(grade3, 8.33)" type="button" value="/-----/" id="grade3" class="grades"></td>
        </tr>
        <tr>
            <td class="sty_td" rowspan="2"><b>2nd</b></td>
            <td class="sty_td" rowspan="2">Object Oriented Programming</td>
            <td class="sty_td" rowspan="2">10</td>
            <td class="sty_td">Case study</td>
            <td class="sty_td"><input onclick="grades(grade4, 8.33)" type="button" value="/-----/" id="grade4" class="grades"></td>
        </tr>
        <tr>
            <td class="sty_td">Project</td>
            <td class="sty_td"><input onclick="grades(grade5, 8.33)" type="button" value="/-----/" id="grade5" class="grades"></td>
        </tr>
        <tr>
            <td class="sty_td" rowspan="4"><b>3rd</b></td>
            <td class="sty_td">Framework Developement 1</td>
            <td class="sty_td">5</td>
            <td class="sty_td">Case study</td>
            <td class="sty_td"><input onclick="grades(grade6, 8.33)" type="button" value="/-----/" id="grade6" class="grades"></td>
        </tr>
        <tr>
            <td class="sty_td" rowspan="3">Framework Developement 2</td>
            <td class="sty_td" rowspan="3">7.5</td>
            <td class="sty_td">Project</td>
            <td class="sty_td"><input onclick="grades(grade7, 4.17)" type="button" value="/-----/" id="grade7" class="grades"></td>
        </tr>
        <tr>
            <td class="sty_td">Assessment</td>
            <td class="sty_td"><input onclick="grades(grade8, 4.17)" type="button" value="/-----/" id="grade8" class="grades"></td>
        </tr>
        <tr>
            <td class="sty_td">Report</td>
            <td class="sty_td"><input onclick="grades(grade9, 4.17)" type="button" value="/-----/" id="grade9" class="grades"></td>
        </tr>
        <tr>
            <td class="sty_td" rowspan="3"><b>4th</b></td>
            <td class="sty_td" rowspan="3">Framework Project 2</td>
            <td class="sty_td" rowspan="3">10</td>
            <td class="sty_td">Portfolio</td>
            <td class="sty_td"><input onclick="grades(grade10, 5.56)" type="button" value="/-----/" id="grade10" class="grades"></td>
        </tr>
        <tr>
            <td class="sty_td">Project</td>
            <td class="sty_td"><input onclick="grades(grade11, 5.56)" type="button" value="/-----/" id="grade11" class="grades"></td>
        </tr>
        <tr>
            <td class="sty_td">Assessment</td>
            <td class="sty_td"><input onclick="grades(grade12, 5.56)" type="button" value="/-----/" id="grade12" class="grades"></td>
        </tr>
        <tr>
            <th class="sty_th">"the entire year"</th>
            <td class="sty_td">Professional Developement</td>
            <td class="sty_td">12.5</td>
            <td class="sty_td">Portfolio</td>
            <td class="sty_td"><input onclick="grades(grade13, 20.83)" type="button" value="/-----/" id="grade13" class="grades"></td>
        </tr>
        <tr>
            <th class="sty_th" rowspan="2">"Whenever"</th>
            <td class="sty_td">Personality 1</td>
            <td class="sty_td">1.25</td>
            <td class="sty_td">Portfolio</td>
            <td class="sty_td"><input onclick="grades(grade14, 2.08)" type="button" value="/-----/" id="grade14" class="grades"></td>
        </tr>
        <tr>
            <td class="sty_td">Personality 2</td>
            <td class="sty_td">1.25</td>
            <td class="sty_td">Portfolio</td>
            <td class="sty_td"><input onclick="grades(grade15, 2.08)" type="button" value="/-----/" id="grade15" class="grades"></td>
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
