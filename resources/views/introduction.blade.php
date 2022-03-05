@extends('layout')

@section('head')
    <link rel="stylesheet" href="{{ URL::asset('/css/profile.css') }}">
@endsection

@section('content')
<body>
<br>
<br>
<br>

<h1>Who am I?</h1>

<article>

<table class="prf_table">

            <tr>

                <th class="prf_th">Name:</th>
                <td class="prf_td">Niclas Persigehl</td>
                <td><img class="profilepic" src="../images/Bewerbungsbild.png"></td>

            </tr>
            <tr>

                <th class="prf_th">Age:</th>
                <td class="prf_td">20</td>
            </tr>
            <tr>
                <th class="prf_th">From:</th>
                <td class="prf_td">Germany</td>
            </tr>
        </table>

    <br>
    <br>

        <h2>
            <span class="span_h2">Short summary of myself</span>
        </h2>

        <p> My Name is Niclas, I am 20 years old and come from germany. <br>
            I have lived in Shanghai for 5 years from 2002 - 2007 and in Changchun<br>
            from 2018 -2020. You could say that I am quite used to living abroad.<br>
            Because of my international experience and the fact that I studied the past two<br>
            years in english, I decided to pursue my further studies in english and abroad.
        </p>

    <br>
    <br>


        <h2>How I got to programming</h2>


        <p> I've always been interested in technological stuff. Not just programming <br>
            also electrical grids. I initially wanted to start as a electrical engineer <br>
            but saw that computer science is better for me.
        </p>

    <br>
    <br>

        <h2>Why ICT?</h2>

        <p> ICT is a very interesting topic for me because I have been learning how to code <br>
            in my past highschool years which really got me into programming.It motivates me that I can create <br>
            complex structures and tools out of nothing anywhere with nothing but my laptop. The feeling I <br>get when my programm runs perfectly
            and the way I designed it is still one of the best things out there.
        </p>

    <br>
    <br>

    </article>
</div>
</body>
@endsection
