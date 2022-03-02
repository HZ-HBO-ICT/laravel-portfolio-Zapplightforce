@extends('layout')

@section('content')
<body>
<br>
<br>
<br>
    <span class="code_a">&ltbody&gt</span>
    <br>
    <span class="code_a" style="margin-left: 50mm;">&lth1&gt</span>

    <h1>Frequently asked Questions</h1>

    <span class="code_a" style="margin-left: 50mm;">&lt/h1&gt</span>
    <br>

    <span class="code_a" style="margin-left: 40mm;">&lttable&gt</span>

    <table class="faq_table">
        @foreach($faqs as $faq)
        <tr>
            <td class="faq_td">
                <button type="button" class="collapsible">{{$faq->question}} &#8628</button>
                <div class="content">
                    <p>{{$faq->answer}}</p>
                </div>
            </td>
        </tr>
        @endforeach
        <tr>
            <td class="faq_td">
                <button type="button" class="collapsible">How do you scan a document and send it to your laptop at HZ? &#8628</button>
                <div class="content">
                    <ol>
                        <li>Ensure you have at least €0.07 credit. <br>Although scanning is free, you must have this amount of credit on your HZ pass.</li>
                        <li>Register using your HZ pass on the TouchID next to the multifunctional printer.</li>
                        <li>In the TouchID menu, select option Scanning - Scan.</li>
                        <li>Lay the original sheet on the feeder or glass plate.</li>
                        <li>Press Scan and Send.</li>
                        <li>Press Scan to me.</li>
                        <li>Press Yes.</li>
                        <li>Press the Start button.</li>
                        <li>The following screen appears for scanning via the glass plate.<br> Press the green Start button on the printer to scan page by page.<br> Once this is ready, press Start Sending.</li>
                        <li>When scanning is completed, press Stop on the TouchID, followed by Logout.</li>
                    </ol>
                </div>
            </td>
        </tr>
        <tr>
            <td class="faq_td">
                <button type="button" class="collapsible">How can you book a project space in one of the wings? &#8628</button>
                <div class="content">
                    <p>Go to your hz portal (<u><a href="https://portal.hz.nl/">portal.hz.nl</a></u>) and login. In your personal menu go to Selfservice portal or directly to <u><a href="https://hzuniversity.topdesk.net/">hzuniversity.topdesk.net</a></u>  <br><br>
                        On the Selfservice portal go to "make a reservation" and book whatever reservation you want. <br><br>
                        If you don't have the Selfservice portal in your personal menu you can add it when you click on "change personal menu"</p>
                </div>
            </td>
        </tr>
        <tr>
            <td class="faq_td">
                <button type="button" class="collapsible">What are the instructions if you want to park your car at the HZ parking lot? &#8628</button>
                <div class="content">
                    <p>As of 1 June, it’s no longer possible to park in the parking garage at the Kousteensedijk for free as student or staff at HZ. The HZ has set up 100 parking spaces on the PZEM site at Poelendaelesingel 10 in Middelburg.<br><br>
                        Access to the parking lot is only possible with the HZ pass. After passing the barrier, following the signs to the HZ parking spaces. The HZ parking spaces have a white sing with the HZ logo. There are also a number of places available for charging an electric car. From the parking lot it is a 300 meter walk to the location Groene Woud.</p>
                </div>
            </td>
        </tr>
    </table>
    <span class="code_a" style="margin-left: 40mm;">&lt/table&gt</span>
    <br>
    <span class="code_a">&lt/body&gt</span>
</body>
@endsection
