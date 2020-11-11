
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <title>Jake Puia Resume</title>

    <style>



    .background{
        font-family: "Courier New", Courier, monospace;
        color: #EFEFEF;
        background-color: #EFEFEF;

    }


    h1{
        text-align: auto;
        color: #EFEFEF;
        margin: auto;
        animation: text 3s 1;
        font-weight: bold;
    }

    h2{
        color: #0C2145;
        text-decoration: underline;
    }

    h3{
        text-align: auto;
        margin: auto;
        animation: text 3s 1;
    }

    .logo{
        float: left;
    }
    
    .jakepuia{
        float: right;
        margin: 1em;
        display: inline-block; 
        padding-top: 5em;
        padding-bottom: 5em;
        padding-right: 12em;
        position: relative;
    }
    
    
    .sometext{
        color: #0C2145;
        font-weight: bold;
        margin: 1em;
        font-size: 20px;
        padding-top: 7em;
        padding-bottom: 5em;
        padding-left: 12em;
    }
    .a{
        width: 100%;
        height: 15%;
        overflow: hidden;
    }

    .carouselInfo{
        margin-left: auto;
        margin-right: auto;
        padding-bottom: 5em;
        width: 90%;
    }


    @keyframes text{
        0%{
            color: #05386B;
        }
    }

    .btn {
        border: none;
        color: white;
        padding: 12px 30px;
        cursor: pointer;
        font-size: 50px;
    }

    .btn:hover {
        background-color: RoyalBlue;
    }

    .resume{
        margin: auto;
        border-radius: 25px;
        background: linear-gradient(45deg, #05386B, #379683);
        color: #EDF5E1;
        width: 20%;
    }

    .github{
        float: left;
        margin: 1em;
        display: inline-block; 
        padding-top: 5em;
        padding-bottom: 5em;
        padding-left: 8em;
        padding-right: 2em;
        position: relative;
        width: 475px;
        height: 425px;
    }


    </style>
  </head>
  
    <body class=background>

    <div>
            <div class="position"> 

                <a class=logo href="http://www.jakepuiaresume.com/home.php#" ><img src="logo2.png"></a>
                        </br>
                        <h1> Welcome! </h1>
                        <h3> Please feel free to look around!</h3>
  
                        <?php 
                            include 'NavBarLeft.html';
                            include 'header.html';
                        ?>
                        <div style="padding-top: 3em;">
                        </div>
                        <?php 
                            include 'carousel.html';
                        ?>
            </div>

            <br>
            <br>
            <br>

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <div align=center class="resume">
                
                <a class="btn" href="JacobPuiaResumeFall2020.pdf" style="color: white;"><i class="fa fa-download"></i> Download Resume Here</a>
                
            </div>

            <h2 align=center style="padding-top: 3em;"> <b> About Me:</b></h2>

            <div class="a" style="margin-top: -4em">
                <div>
                    <a href="http://www.jakepuiaresume.com/about.php#" ><img class="jakepuia" src="jakepuia.JPG"></a>
                </div>
                <p class="sometext">
                        Welcome! I am Jake Puia and I am currently a Senior at Juniata College, Class of 2021. Attending
                        Juniata has given me a lot of opportunities and experience both in and out of the Information Technology field
                        of study. Please feel free to browse this website to find about these opportunites and my accomplishments. 
                        Contact me at <a href="mailto: puiajr17@juniata.edu">puiajr17@juniata.edu</a> and I will get back to you as 
                        soon as I possibly can!
                </p>
            </div>

            <h2 align=center style=""> <b> GitHub Repository:</b></h2>

            <div class="a" style="margin-top: -4em">
            <div>
                <a href="https://github.com/JakePuia/PuiaGithub" ><img class="github" src="Github.png"></a>
            </div>
            <p class="sometext" style="padding-right: 8em">
            Please click on the GitHub image to head over to my GitHub Repository! This repository will contain sample code
            that I have written over my career at Juniata. This code includes everything from Java to C++. In additon to my 
            sample code is the source code that powers this website! 
            </p>
            </div>

            <h2 align=center style="padding-bottom: 1em;"> <b>Some Interesting Facts:</b></h2>

            <div class="carouselInfo">
                <?php
                include 'carouselInfo.html';
                ?>
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