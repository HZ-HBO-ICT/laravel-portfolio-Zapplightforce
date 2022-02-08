<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="../css/mainCSS.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/tables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<header>
    <img class="logo" src="../images/ZLF-Logo.png">
</header>

<button class="tablink" onclick="openPage('Home', this, 'red')" id="defaultOpen">Home</button>
<button class="tablink" onclick="openPage('Who am I?', this, '')">Who am I?</button>
<button class="tablink" onclick="openPage('Study', this, '')">Study</button>
<button class="tablink" onclick="openPage('FAQ', this, '')">FAQ</button>
<div class="subnav">
    <button class="subnavbtn">Blog Posts <i class="fa fa-caret-down"></i></button>


    <div class="subnav-content">

        <button class="btn" onclick="openPage('Study choice', this, 'none')"><img class="postpic" src="../images/studychoice.png"/>
            <span>Study choice</span>
            <br>
            What are my motivations, my
            strenghts and weaknesses?</button>

        <button class="btn" onclick="openPage('experiences', this, 'none')"><img class="postpic" src="../images/SWOT-analysis.png"/>
            <span>Experiences</span>
            <br>
            What are my experiences,
            strenghts and weaknesses?</button>

        <button class="btn" onclick="openPage('oracle', this, 'none')"><img class="postpic" src="../images/OracleDB.png"/>
            <span>Oracle</span>
            <br>
            What is Oracle and
            what do they do?</button>

        <button class="btn" onclick="openPage('spacex', this, 'none')"><img class="postpic" src="../images/x.png"/>
            <span>Space X</span>
            <br>
            Space X, the revolutionary
            Space agency.</button>

        <button class="btn" onclick="openPage('dxc', this, 'none')"><img class="postpic" src="../images/DXC_Logo.png"/>
            <span>DXC Technology</span>
            <br>
            DXC Technology the multinational
            information software company</button>

    </div>
</div>


<!----------------------------------------------------------------------------------------------------------------------------->

<!--------------------------------------------------------------Home page------------------------------------------------------>

<!----------------------------------------------------------------------------------------------------------------------------->




<div id="Home" class="tabcontent">

    <span class="code_a">&ltbody&gt</span>
    <br>
    <span class="code_a" style="margin-left: 50mm;">&lth1&gt</span>

    <h1>Welcome</h1>

    <span class="code_a" style="margin-left: 50mm;">&lt/h1&gt</span>
    <br>

    <span class="code_a" style="margin-left: 40mm;">&ltimg&gt</span>
    <br>
    <img class="hzlogo" src="../images/hz-logo-removebg-preview.png">
    <br>
    <span class="code_a" style="margin-left: 40mm;">&lt/img&gt</span>
    <br>
    <span class="code_a">&lt/body&gt</span>

</div>

<!----------------------------------------------------------------------------------------------------------------------------->

<!--------------------------------------------------------------Introduction Page---------------------------------------------->

<!----------------------------------------------------------------------------------------------------------------------------->

<div id="Who am I?" class="tabcontent">
    <span class="code_a">&ltbody&gt</span>
    <br>
    <span class="code_a" style="margin-left: 50mm;">&lth1&gt</span>

    <h1>Who am I?</h1>
    <span class="code_a" style="margin-left: 50mm;">&lt/h1&gt</span>

    <article>

        <span class="code_a" style="margin-left: 20mm;">&ltarticle&gt</span>

        <br>

        <table class="prf_table">
            <span class="code_a" style="margin-left: 30mm;">&lttable&gt</span>

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
        <span class="code_a" style="margin-left: 30mm;">&lt/table&gt</span>
        <br>

        <span class="code_a" style="margin-left: 60mm;">&lth2&gt</span>

        <h2>
            <span class="span_h2">Short summary of myself</span>
        </h2>
        <span class="code_a" style="margin-left: 60mm;">&lt/h2&gt</span>
        <br>

        <span class="code_a" style="margin-left: 70mm;">&ltp&gt</span>

        <p>

            My Name is Niclas, I am 20 years old and come from germany. <br>
            I have lived in Shanghai for 5 years from 2002 - 2007 and in Changchun<br>
            from 2018 -2020. You could say that I am quite used to living abroad.<br>
            Because of my international experience and the fact that I studied the past two<br>
            years in english, I decided to pursue my further studies in english and abroad.
        </p>
        <span class="code_a" style="margin-left: 70mm;">&lt/p&gt</span>
        <br>

        <span class="code_a" style="margin-left: 60mm;">&lth2&gt</span>

        <h2>How I got to programming</h2>

        <span class="code_a" style="margin-left: 60mm;">&lt/h2&gt</span>
        <br>

        <span class="code_a" style="margin-left: 70mm;">&ltp&gt</span>

        <p>
            I've always been interested in technological stuff. Not just programming <br>
            also electrical grids. I initially wanted to start as a electrical engineer <br>
            but saw that computer science is better for me.
        </p>
        <span class="code_a" style="margin-left: 70mm;">&lt/p&gt</span>
        <br>
        <span class="code_a" style="margin-left: 60mm;">&lth2&gt</span>

        <h2>Why ICT?</h2>
        <span class="code_a" style="margin-left: 60mm;">&lt/h2&gt</span>
        <br>
        <span class="code_a" style="margin-left: 70mm;">&ltp&gt</span>

        <p>
            ICT is a very interesting topic for me because I have been learning how to code <br>
            in my past highschool years which really got me into programming.It motivates me that I can create <br>
            complex structures and tools out of nothing anywhere with nothing but my laptop. The feeling I <br>get when my programm runs perfectly
            and the way I designed it is still one of the best things out there.
        </p>
        <span class="code_a" style="margin-left: 70mm;">&lt/p&gt</span>
        <br>
        <span class="code_a" style="margin-left: 20mm;">&lt/article&gt</span>
    </article>
    <br>
    <span class="code_a">&lt/body&gt</span>

</div>

<!----------------------------------------------------------------------------------------------------------------------------->

<!--------------------------------------------------------------Study Dashboard------------------------------------------------>

<!----------------------------------------------------------------------------------------------------------------------------->

<div id="Study" class="tabcontent">
    <span class="code_a">&ltbody&gt</span>
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
</div>

<!----------------------------------------------------------------------------------------------------------------------------->

<!--------------------------------------------------------------FAQ------------------------------------------------------------>

<!----------------------------------------------------------------------------------------------------------------------------->

<div id="FAQ" class="tabcontent">
    <span class="code_a">&ltbody&gt</span>
    <br>
    <span class="code_a" style="margin-left: 50mm;">&lth1&gt</span>

    <h1>Frequently asked Questions</h1>

    <span class="code_a" style="margin-left: 50mm;">&lt/h1&gt</span>
    <br>

    <span class="code_a" style="margin-left: 40mm;">&lttable&gt</span>

    <table class="faq_table">
        <tr>
            <td class="faq_td">
                <button type="button" class="collapsible">How do you print a document from your laptop at HZ? &#8628</button>
                <div class="content">
                    <p>Go to the website <u><a href="https://print.hz.nl/">print.hz.nl</a></u> and login. Then upload the document you want to print.<br>
                        Next go with your student card to the nearest printer and put it above the little screen next to the printer<br>
                        (there should be one for every printer). It will then display the document you uploaded and you only have to press print.<br>
                        Make sure your card has money on it.</p>
                </div>
            </td>
        </tr>
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
</div>

<!----------------------------------------------------------------------------------------------------------------------------->

<!--------------------------------------------------------------Study choice Blog---------------------------------------------->

<!----------------------------------------------------------------------------------------------------------------------------->

<div id="Study choice" class="tabcontent">
    <span class="code_a">&ltbody&gt</span>
    <br>
    <span class="code_a" style="margin-left: 50mm;">&lth1&gt</span>

    <h1>Study choice</h1>

    <span class="code_a" style="margin-left: 50mm;">&lt/h1&gt</span>
    <br>
    <span class="code_a" style="margin-left: 60mm;">&lth2&gt</span>

    <h2>MOTIVATE YOUR STUDY CHOICE</h2>

    <span class="code_a" style="margin-left: 60mm;">&lt/h2&gt</span>
    <br>

    <span class="code_a" style="margin-left: 70mm;">&ltp&gt</span>

    <p>I was always interested in Computer science, which especially developed during my
        previous education with the IB. I wanted to learn more on Application developement
        but with a more practical approach. It is one of the few things I’m good at and
        really enjoy doing it. </p>

    <span class="code_a" style="margin-left: 70mm;">&lt/p&gt</span>
    <br>
    <span class="code_a" style="margin-left: 60mm;">&lth2&gt</span>

    <h2>AFTER COMPLETING THE STUDY...</h2>

    <span class="code_a" style="margin-left: 60mm;">&lt/h2&gt</span>
    <br>
    <span class="code_a" style="margin-left: 70mm;">&ltp&gt</span>

    <p>I’m not quit sure yet what kind of profession I am going to go with in my future
        but I am definetly trying to aim for software engineering because I am enjoying
        creating new things. I have a little knowledge of programming but I am still a
        beginner and I’m very eager to learn more.</p>

    <span class="code_a" style="margin-left: 70mm;">&lt/p&gt</span>
    <br>

    <span class="code_a">&lt/body&gt</span>
</div>

<!----------------------------------------------------------------------------------------------------------------------------->

<!--------------------------------------------------------------Experiences Blog----------------------------------------------->

<!----------------------------------------------------------------------------------------------------------------------------->

<div id="experiences" class="tabcontent">
    <span class="code_a">&ltbody&gt</span>
    <br>
    <span class="code_a" style="margin-left: 50mm;">&lth1&gt</span>

    <h1>Past Experiences</h1>

    <span class="code_a" style="margin-left: 50mm;">&lt/h1&gt</span>
    <br>

    <span class="code_a" style="margin-left: 70mm;">&ltp&gt</span>

    <p>I have been programming for the past three years although the last year was a bit of a break.
        I have been using java mostly and a little C#. I have been working in Visual studio and Unity.
        I only learned the basics so thats wahy I came to hz to learn more. </p>

    <span class="code_a" style="margin-left: 70mm;">&lt/p&gt</span>
    <br>
    <span class="code_a" style="margin-left: 50mm;">&lth1&gt</span>

    <h1>SWOT</h1>

    <span class="code_a" style="margin-left: 50mm;">&lt/h1&gt</span>
    <br>
    <span class="code_a" style="margin-left: 60mm;">&lth2&gt</span>

    <h2>Strenght</h2>

    <span class="code_a" style="margin-left: 60mm;">&lt/h2&gt</span>
    <br>
    <span class="code_a" style="margin-left: 70mm;">&ltp&gt</span>

    <p>when I’m interested in a topic I am a very fast learner.</p>

    <span class="code_a" style="margin-left: 70mm;">&lt/p&gt</span>
    <br>
    <span class="code_a" style="margin-left: 60mm;">&lth2&gt</span>

    <h2>Weakness</h2>

    <span class="code_a" style="margin-left: 60mm;">&lt/h2&gt</span>
    <br>
    <span class="code_a" style="margin-left: 70mm;">&ltp&gt</span>

    <p>I often want too many things at the same time.</p>

    <span class="code_a" style="margin-left: 70mm;">&lt/p&gt</span>
    <br>
    <span class="code_a" style="margin-left: 60mm;">&lth2&gt</span>

    <h2>Opportunities</h2>

    <span class="code_a" style="margin-left: 60mm;">&lt/h2&gt</span>
    <br>
    <span class="code_a" style="margin-left: 70mm;">&ltp&gt</span>

    <p>If I time my tasks appropriately I can improve my workflow</p>

    <span class="code_a" style="margin-left: 70mm;">&lt/p&gt</span>
    <br>

    <span class="code_a" style="margin-left: 60mm;">&lth2&gt</span>

    <h2>Threats</h2>

    <span class="code_a" style="margin-left: 60mm;">&lt/h2&gt</span>
    <br>
    <span class="code_a" style="margin-left: 70mm;">&ltp&gt</span>

    <p>I need to start earlier on projects and studies if I want the results I envisioned.</p>

    <span class="code_a" style="margin-left: 70mm;">&lt/p&gt</span>
    <br>

    <span class="code_a">&lt/body&gt</span>
</div>

<!----------------------------------------------------------------------------------------------------------------------------->

<!--------------------------------------------------------------Oracle Blog---------------------------------------------------->

<!----------------------------------------------------------------------------------------------------------------------------->

<div id="oracle" class="tabcontent">

    <span class="code_a">&ltbody&gt</span>
    <br>
    <span class="code_a" style="margin-left: 50mm;">&lth1&gt</span>

    <h1>Oracle</h1>

    <span class="code_a" style="margin-left: 50mm;">&lt/h1&gt</span>
    <br>
    <span class="code_a" style="margin-left: 60mm;">&lth2&gt</span>

    <h2>Introduction</h2>

    <span class="code_a" style="margin-left: 60mm;">&lt/h2&gt</span>
    <br>

    <span class="code_a" style="margin-left: 70mm;">&ltp&gt</span>

    <p>Oracle is an American multinational computer technology corporation, headquartered
        in Austin, Texas. Oracle sells database software and technology, cloud engineered systems
        and enterprise software products. Particularly its own brands of database management systems.
        In 2020, Oracle was the second-largest software company in the world by revenue and market capatilization.
        The company also develops and builds tools for database development and systems of middle-tier software.
    </p>

    <span class="code_a" style="margin-left: 70mm;">&lt/p&gt</span>
    <br>
    <span class="code_a" style="margin-left: 40mm;">&ltimg&gt</span>
    <br>
    <img class="logo" src="../images/Oracle-Logo.png">
    <br>
    <span class="code_a" style="margin-left: 40mm;">&lt/img&gt</span>
    <br>
    <span class="code_a" style="margin-left: 60mm;">&lth2&gt</span>

    <h2>Technology Oracle works with</h2>

    <span class="code_a" style="margin-left: 60mm;">&lt/h2&gt</span>
    <br>
    <span class="code_a" style="margin-left: 70mm;">&ltp&gt</span>

    <p>Providing organizations with the transformational tools they need to embrace innovation, Oracle announced continued
        advancements in emerging technologies across Oracle Cloud, including artificial intelligence (AI), machine learning, blockchain,
        IoT, and human interfaces.
    </p>

    <span class="code_a" style="margin-left: 70mm;">&lt/p&gt</span>
    <br>

    <span class="code_a" style="margin-left: 60mm;">&lth2&gt</span>

    <h2>Functions and roles in Oracle</h2>

    <span class="code_a" style="margin-left: 60mm;">&lt/h2&gt</span>
    <br>
    <span class="code_a" style="margin-left: 70mm;">&ltp&gt</span>

    <p>An Oracle developer may be asked to perform any number of tasks, from developing and launching a database system to
        maintaining and upgrading a company's storgae capacity. The range of duties depends entirely on the demands
        of certain jobs, prospective developers should preuse Oracles website for specifics on each certification and its significance.
    </p>

    <span class="code_a" style="margin-left: 70mm;">&lt/p&gt</span>
    <br>

    <span class="code_a">&lt/body&gt</span>

</div>

<!----------------------------------------------------------------------------------------------------------------------------->

<!--------------------------------------------------------------Space X Blog--------------------------------------------------->

<!----------------------------------------------------------------------------------------------------------------------------->

<div id="spacex" class="tabcontent">
    <span class="code_a">&ltbody&gt</span>
    <br>
    <span class="code_a" style="margin-left: 50mm;">&lth1&gt</span>

    <h1>SpaceX</h1>

    <span class="code_a" style="margin-left: 50mm;">&lt/h1&gt</span>
    <br>
    <span class="code_a" style="margin-left: 60mm;">&lth2&gt</span>

    <h2>Introduction</h2>

    <span class="code_a" style="margin-left: 60mm;">&lt/h2&gt</span>
    <br>

    <span class="code_a" style="margin-left: 70mm;">&ltp&gt</span>

    <p>SpaceX designs, manufacturesand launches advanced rockets and spacecrafts. The company was founded in 2002 to revolutionize
        space technology. Located in Hawthorne, California. They are in the space / rockets branch with more than 9500employees.
    </p>

    <span class="code_a" style="margin-left: 70mm;">&lt/p&gt</span>
    <br>
    <span class="code_a" style="margin-left: 40mm;">&ltimg&gt</span>
    <br>
    <img class="logo" src="../images/spacex.jpeg">
    <br>
    <span class="code_a" style="margin-left: 40mm;">&lt/img&gt</span>
    <br>
    <span class="code_a" style="margin-left: 60mm;">&lth2&gt</span>

    <h2>Technology SpaceX works with</h2>

    <span class="code_a" style="margin-left: 60mm;">&lt/h2&gt</span>
    <br>
    <span class="code_a" style="margin-left: 70mm;">&ltp&gt</span>

    <p>SpaceX works on everything from large-scale web applications to tiny embedded computing platforms. They build tech stacks
        on C# / MVC4 / MSSQL via Rest to Javascript / Knockout / Handlebars / Less, C++ / embedded Linux, Python, LabVIEW ... which all enables
        them to build, launch, and monitor their technology that goes to space.
    </p>

    <span class="code_a" style="margin-left: 70mm;">&lt/p&gt</span>
    <br>

    <span class="code_a" style="margin-left: 60mm;">&lth2&gt</span>

    <h2>Functions and roles in SpaceX</h2>

    <span class="code_a" style="margin-left: 60mm;">&lt/h2&gt</span>
    <br>
    <span class="code_a" style="margin-left: 70mm;">&ltp&gt</span>

    <p>The Functions and roles at SpaceX are very diverse and range from application software to machine operations, satellite developement
        and space operations.</p>

    <span class="code_a" style="margin-left: 70mm;">&lt/p&gt</span>
    <br>

    <span class="code_a">&lt/body&gt</span>
</div>

<!----------------------------------------------------------------------------------------------------------------------------->

<!--------------------------------------------------------------DXC Technologies Blog------------------------------------------>

<!----------------------------------------------------------------------------------------------------------------------------->

<div id="dxc" class="tabcontent">
    <span class="code_a">&ltbody&gt</span>
    <br>
    <span class="code_a" style="margin-left: 50mm;">&lth1&gt</span>

    <h1>DXC Technology</h1>

    <span class="code_a" style="margin-left: 50mm;">&lt/h1&gt</span>
    <br>
    <span class="code_a" style="margin-left: 60mm;">&lth2&gt</span>

    <h2>Introduction</h2>

    <span class="code_a" style="margin-left: 60mm;">&lt/h2&gt</span>
    <br>

    <span class="code_a" style="margin-left: 70mm;">&ltp&gt</span>

    <p>DXC Technology also short for Delivering Excellence for their Costumers is an American multinational corporation that provides business-to-
        business information technology services. Their main focus is based on outsourcing consulting and managed services. The headquarters of the company are based
        in the united statesVirginia but since it is a multinational company, it provides services all over the world. At the time of its creation, DXCTechnology had
        revenues of $25 billion, employed 170,000 people and operated in 70 countries. By June 2021, the employee count of DXC has come down to 134,000.
    </p>

    <span class="code_a" style="margin-left: 70mm;">&lt/p&gt</span>
    <br>
    <span class="code_a" style="margin-left: 40mm;">&ltimg&gt</span>
    <br>
    <img class="logo" src="../images/DXC_Technology.png">
    <br>
    <span class="code_a" style="margin-left: 40mm;">&lt/img&gt</span>
    <br>
    <span class="code_a" style="margin-left: 60mm;">&lth2&gt</span>

    <h2>Technology DXC works with</h2>

    <span class="code_a" style="margin-left: 60mm;">&lt/h2&gt</span>
    <br>
    <span class="code_a" style="margin-left: 70mm;">&ltp&gt</span>

    <p> <b><u>Managed multicloud services:</u></b> Hybrid platforms provide managed services for compute, storage andnetwork infrastructure as well as full-stack application support.
        <br><b><u>Cloud strategy and migration services:</u></b> Leveraging end-to-end advisory, transformation and migration services, with automated tools, proven methods and fast, reliable delivery.
        <br><b><u>Virtual private cloud services:</u></b> Safeguarding IT environment with a highly secure multitenant cloud platform. Their services tune virtual and physical server configurations to match client’s application workloads.<br><br>
    </p>

    <span class="code_a" style="margin-left: 70mm;">&lt/p&gt</span>
    <br>

    <span class="code_a" style="margin-left: 60mm;">&lth2&gt</span>

    <h2>Functions and roles in DXC Technology</h2>

    <span class="code_a" style="margin-left: 60mm;">&lt/h2&gt</span>
    <br>
    <span class="code_a" style="margin-left: 70mm;">&ltp&gt</span>

    <p>DXC Technologies have many different roles to offer, and many of them are in IT sector with many entry level jobs and some more roles which require more experience in order to be a successful candidate. Some of the entry level positions are:
        Junior tester, Junior Developer, First Line Tech Support.
        Entry level jobs usually require only some basics of the programming and IT knowledge. So person who wants to learn more about IT could join as First Line Tech Support if he does not have any knowledge in IT at all.
        There are many senior roles at the company which for the requirements are different per role, usually requiring relevant experience from 2 to 5 years. Examples of the roles below:
        Senior Network Engineer, Private Cloud Engineer, System Engineer, Big Data Specialist.
    </p>

    <span class="code_a" style="margin-left: 70mm;">&lt/p&gt</span>
    <br>

    <span class="code_a">&lt/body&gt</span>

</div>

<!----------------------------------------------------------------------------------------------------------------------------->

<!--------------------------------------------------------------Footer--------------------------------------------------------->

<!----------------------------------------------------------------------------------------------------------------------------->

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
