<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{ URL::asset('/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/mainCSS.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/tables.css') }}">
</head>

<header>
    <table class = "navMenu">
        <td class="navlogo"><img class="logo" src="../images/ZLF-Logo.png"></td>
        <td class="navMenuItem"><a class="tablink" id="{{Request::path() === 'homepage' ? 'activeLink' : ''}}" href="/homepage">Home</a></td>
        <td class="navMenuItem"><a class="tablink" id="{{Request::path() === 'introduction' ? 'activeLink' : ''}}" href="/introduction">Who am I?</a></td>
        <td class="navMenuItem"><a class="tablink" id="{{Request::path() === 'study' ? 'activeLink' : ''}}" href="/study">Study</a></td>
        <td class="navMenuItem"><a class="tablink" id="{{Request::path() === 'faq' ? 'activeLink' : ''}}" href="/faq">FAQ</a></td>
        <td class="navMenuItem"><a class="tablink" id="{{Request::path() === 'blog' ? 'activeLink' : ''}}" href="/blog">Blog</a></td>
    </table>
</header>

<body>
    @yield('content')
</body>
<footer>

    <ul>
        <li>
            <a class="footer" href="https://hz.nl/uploads/documents/Regelingen/NL/Onderwijs-examenregelingen/OER-HZ-Ba2021-2022_Edefinitief-na-BDT-13-7-Nvdw-Eng.pdf">Course and ExaminationRegulations</a><br>
        </li>

        <li>
            <a class="footer" href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pdf">Implementation Regulations</a>
        </li>

        <li>
            <a class="footer" href="https://learn.hz.nl">Learn Platform</a>
        </li>

        <li>
            ICT <a class="footer" href="https://teams.microsoft.com/l/team/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/conversations?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">First years</a> and
            <a class="footer" href="https://teams.microsoft.com/l/team/19%3a827654897ab746089c081f24aff1c984%40thread.skype/conversations?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">General</a>
        </li>

        <li>
            <a class="footer" href="https://learn.hz.nl">Study Progress</a>
        </li>

    </ul>
</footer>



<script src="../js/script.js"></script>

</html>
