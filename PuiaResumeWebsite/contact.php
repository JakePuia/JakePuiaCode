<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <title>Contact</title>

    
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

    .gif{
        float:left;
        padding: 5em;
        height: 500px;
        width: 550px;
    }

    .container{
       color: #0C2145;
       font-weight: bold;
       padding: 5em;
    }

    .headers{
       color: #0C2145;
       font-weight: bold;
       text-decoration: underline;
    }

    @keyframes text{
        0%{
            color: #05386B;
        }
    }



    </style>
  </head>
  <body class=background>

            <div>   
                <a class=logo href="http://www.jakepuiaresume.com/home.php#" ><img src="logo2.png"></a>
                <h1> Contact Me </h1>

                <?php 
                include 'NavBarLeft.html';
                include 'header.html';
                ?>

            </div>
            <br>
            <br>
            <br>
            <div>
                <img class=gif src="hitmeup.gif">
            

                <div class=container>
                        <h3 class=headers>
                            My Email:
                        </h3>
                        <p>
                            Please feel free to contact me with any questions! </br>
                            <a href="mailto: puiajr17@juniata.edu"> puiajr17@juniata.edu </a>
                            </br>
                        </p>
                        <h3 class=headers>
                            LinkedIn:
                        </h3>
                        <p>
                            <a href="https://www.linkedin.com/in/jakepuia/"> Jake Puia LinkedIn </a>
                        </p>
                        </br>

                        <h3 class=headers>
                            References:
                        </h3>
                        <div style="display:table;"> 
                            <p>
                                    The following references have approved my use of their informaiton. </br>
                                    Please contact them accordingly. </br>
                                </br>
                                    <u>Professor William (Bill) Thomas</u> </br>
                                    Juniata College </br>
                                    1700 Moore Street </br>
                                    Huntingdon, PA 16652 </br>
                                    Ext. (814)641- 3621 </br>
                                    Email: <a href="mailto: thomas@juniata.edu">thomas@juniata.edu </a></br>
                                    NOTE: Professor Thomas is one of my college professors in the Information Technology and Computer Science Department. </br>
                                </br>
                                    <u>Dr. Loren Rhodes</u> </br>
                                    Juniata College </br>
                                    1700 Moore Street </br>
                                    Huntingdon, PA 16652 </br>
                                    Ext. (814)641- 3620 </br>
                                    Email: <a href="mailto: rhodes@juniata.edu">rhodes@juniata.edu</a></br>
                                    NOTE: Dr. Rhodes is one of my college professors in the Information Technology and Computer Science Department. He is also the CS/IT Department Chair.</br>
                                </br>
                                    <u>Jon Johnson</u></br>
                                    Touchpoint Industries</br>
                                    260 Bridge Street</br>
                                    Phoenixville, PA 19460</br>
                                    (484)788- 3805</br>
                                    Email: <a href="mailto: jon@touchpointk12.com">jon@touchpointk12.com</a></br>
                                    NOTE: Jon was my employer for my Summer 2019 and Winter 2020 internships.</br>
                                </br>
                                    <u>Annette Wilcox</u></br>
                                    Neff's UCC Preschool</br>
                                    5550 PA-873</br>
                                    Schnecksville, PA 18078</br>
                                    (610)767-5327</br>
                                    Email: <a href="mailto: preschool@unionucc.org">preschool@unionucc.org</a></br>
                                    NOTE: Annette is the preschool director that held my internship, which entailed the creation of thier website: <a href="https://www.neffsuccpreschool.org/"> <u>www.neffsuccpreschool.org</u></a>.</br>

                            </p>
                        </div>
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