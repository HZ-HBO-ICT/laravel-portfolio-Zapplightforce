<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Study Program</title>
    <link rel="stylesheet" href="../css/mainCSS.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/tables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<header>
    <img class="logo" src="../images/ZLF-Logo.png">
</header>

<a class="tablink" href="http://laravel-portfolio-zapplightforce.test/homepage">Home</a>
<a class="tablink" href="http://laravel-portfolio-zapplightforce.test/introduction">Who am I?</a>
<a class="tablink" href="http://laravel-portfolio-zapplightforce.test/study">Study</a>
<a class="tablink" href="http://laravel-portfolio-zapplightforce.test/faq">FAQ</a>
<div class="subnav">
    <button class="subnavbtn">Blog Posts <i class="fa fa-caret-down"></i></button>


    <div class="subnav-content">

        <a class="btn" href="http://laravel-portfolio-zapplightforce.test/blog/study-choice"><img class="postpic" src="../images/studychoice.png"/>
            <span>Study choice</span>
            <br>
            What are my motivations, my
            strenghts and weaknesses?</a>

        <a class="btn" href="http://laravel-portfolio-zapplightforce.test/blog/experiences"><img class="postpic" src="../images/SWOT-analysis.png"/>
            <span>Experiences</span>
            <br>
            What are my experiences,
            strenghts and weaknesses?</a>

        <a class="btn" href="http://laravel-portfolio-zapplightforce.test/blog/oracle"><img class="postpic" src="../images/OracleDB.png"/>
            <span>Oracle</span>
            <br>
            What is Oracle and
            what do they do?</a>

        <a class="btn" href="http://laravel-portfolio-zapplightforce.test/blog/spacex"><img class="postpic" src="../images/x.png"/>
            <span>Space X</span>
            <br>
            Space X, the revolutionary
            Space agency.</a>

        <a class="btn" href="http://laravel-portfolio-zapplightforce.test/blog/dxcTech"><img class="postpic" src="../images/dxc-logo-white.png"/>
            <span>DXC Technology</span>
            <br>
            DXC Technology the multinational
            information software company</a>

    </div>
</div>

<body>
<br>
<br>
<br>

   <span class="code_a" style="margin-top: 500px">&ltbody&gt</span>
    <br>
    <span class="code_a" style="margin-left: 50mm;">&lth1&gt</span>

    <h1>Programme overview</h1>

    <span class="code_a" style="margin-left: 50mm;">&lt/h1&gt</span>
    <br>

    <table class="sty_table">
        <span class="code_a" style="margin-left: 30mm;">&lttable&gt</span>
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
    <span class="code_a" style="margin-left: 30mm;">&lt/table&gt</span>
    <br>

    <span class="code_a" style="margin-left: 40mm;">&ltdiv&gt</span>

    <div id="myProgress">
        <div id="myBar">0%</div>
    </div>
    <span class="code_a" style="margin-left: 40mm;">&lt/div&gt</span>
    <br>
    <span class="code_a">&lt/body&gt</span>
</body>

<footer>

    <ul>
        <li>
            <a href="https://hz.nl/uploads/documents/Regelingen/NL/Onderwijs-examenregelingen/OER-HZ-Ba2021-2022_Edefinitief-na-BDT-13-7-Nvdw-Eng.pdf">Course and ExaminationRegulations</a><br>
        </li>

        <li>
            <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pdf">Implementation Regulations</a>
        </li>

        <li>
            <a href="https://learn.hz.nl">Learn Platform</a>
        </li>

        <li>
            ICT <a href="https://teams.microsoft.com/l/team/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/conversations?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">First years</a> and
            <a href="https://teams.microsoft.com/l/team/19%3a827654897ab746089c081f24aff1c984%40thread.skype/conversations?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">General</a>
        </li>

        <li>
            <a href="https://learn.hz.nl">Study Progress</a>
        </li>

    </ul>
</footer>



<script src="../js/script.js"></script>

</html>

