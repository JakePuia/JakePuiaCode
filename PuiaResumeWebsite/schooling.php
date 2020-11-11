<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <title>My Education</title>

    
    <style>
    .background{
        font-family: "Courier New", Courier, monospace;
        color: #EFEFEF;
        background-color: #EFEFEF;
        display: flex;
        flex-direction: column;

    }

    .logo{
        float: left;
    }

    h1{
        font-family: "Courier New", Courier, monospace;
        color: #EFEFEF;
        text-align: auto;
        margin: auto;
        animation: text 3s 1;
        font-weight: 900;
    }

    .juniata{
        float:left;
        padding: 5em;
        height: 500px;
        width: 500px;
    }

    .container{
       color: #0C2145;
       font-weight: bold;
       padding: 5em;
    }

    .headers{
       color: #0C2145;
       font-weight: bold;
       padding-bottom: 1em;
       text-decoration: underline;
    }

    @keyframes text{
        0%{
            color: #05386B;
        }
    }

    .text{
        text-indent: 50px;
    }

    .btn {
        background-color: #05386B;
        border: none;
        color: white;
        padding: 12px 30px;
        cursor: pointer;
        font-size: 20px;
    }

    .btn:hover {
        background-color: RoyalBlue;
    }

    .transcript{
        margin: auto;
        border-radius: 25px;
        background: linear-gradient(45deg, #05386B, #379683);
        color: #EDF5E1;
        width: 30%;
    }


    </style>
  </head>
  <body class=background>

            <div>   
                <a class=logo href="http://www.jakepuiaresume.com/home.php#" ><img src="logo2.png"></a>
                <h1> My Education </h1>

                <?php 
                include 'NavBarLeft.html';
                include 'header.html';
                ?>

            </div>

            <br>
            <br>
            <br>
            <div>
               <a  href="https://www.juniata.edu/academics/departments/it-computers-media/index.php"> <img class=juniata src="juniata.png"></a>

                    <div class=container>
                    <p class=text>
                    I am Jake Puia and I am a Senior at Juniata College, which is located in Huntingdon, PA. Here at Juniata, we do not have Majors and Minors, rather 
                    we choose a Program of Emphasis or P.O.E. for short, along with a Secondary Emphasis or S.E. for short. This allows students to have the option of 
                    creating their own field of study rather than being confined to a specific preset major. My P.O.E. is in Information Technology with a S.E. in Computer 
                    Programming. Having the combination of Information Technology and Computer Programming gave me the chance to learn a lot about everything in the field
                     from different coding languages, to working with network servers, to dismantling and rebuilding the hardware of computers.  
                    </p>
                    <p class=text>
                    I am currently in the process of doing research to have the honor of graduating with distinction in the field of Information Technology. This research 
                    has given me the opportunity to dive deeper into my field of interest within the specific topic of studying Moore’s Law. I will have the opportunity
                     to present this research at the end of my Senior year at the Liberal Arts Symposium at Juniata College.
                    </p>
                    <p class=text>
                    Below you will find a list of all of the courses I have taken within the Information Technology and Computer Programming fields of study along with 
                    a link to my unofficial college transcript as of 09/05/2020.
                    </p>
                <br>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                    <div align=center class="transcript">
                        <a class="btn" href="JacobPuiaUnofficialTranscriptFall2020.pdf" style="color: white;" ><i class="fa fa-download"></i> Download Transcript Here</a>
                    </div>
                </div>   
                <div class=container>
                <h3 class=headers>
                    Achievements:
                    </h3>
                    <p>
                   Dean's List: Fall Semester 2019, Spring Semester 2020 </br>
                   4.0 Semester GPA: Spring Semester 2020 </br>
                    </p>
                </div>
                <div class=container>
                <h3 class=headers>
                    Computer Science and IT Classes taken at Juniata College:
                    </h3>
                    <div style="display: table;">
                        <div style="display: table-row;">
                            <p style="display:table-cell;" >
                            •	Computer Science I </br>
                            •	Computer Science II </br>
                            •	Software Engineering </br>
                            •	Android Programming </br>
                            •	Computer Organization </br>
                            •	Information Technology Systems </br>
                            •	Discrete Structures </br>
                            •	Principles of Information Technology </br>
                            •	Art of Public Speaking </br>
                            •	Intro to Data Science </br>
                            •	Information Technology Seminar I </br>
                            •	Information Technology Practicum </br>
                            </p>
                            <p style="display:table-cell; padding-left: 2em">
                            •	Project Management </br>
                            •	Innovation for Industry I </br>
                            •	Innovation for Industry II </br>
                            •	Innovation for Industry III </br>
                            •	Mass Media and Society </br>
                            •	Database Management Systems </br>
                            •	Web Design </br>
                            •	Web Programming </br> 
                            •	The Metaverse </br>
                            •	Security Engineering (and Lab) </br>
                            •	C++ Programming </br>
                            </p>
                        </div>

                    </div>

                        </p>
                    <br>
                </div>   
  </div>
        <?php
            include 'footer.php';
        ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/jQuery/jquery-3.3.1.slim.min.js" ></script>
    <script src="bootstrap/popper/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js" ></script>
  </body>
</html>