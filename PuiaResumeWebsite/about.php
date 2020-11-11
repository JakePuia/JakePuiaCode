<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <title>About</title>

    
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
        font-weight: bold;
    }

    .jakepuia{
        float:left;
        padding: 5em;
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
    

    .guitar{
        clear:both;
        padding-bottom: 4em;
    }

    p{
        text-indent: 50px;
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
                <h1> A Little Bit About Me </h1>

                <?php 
                include 'NavBarLeft.html';
                include 'header.html';
                ?>

            </div>
            <br>
            <br>
            <br>
            <div>
                <img class=jakepuia src="jakepuia.JPG">

                <div class=container>
                    <p >
                    Hello and welcome to my website! I hope this site gives you a better idea of who I am not only as a potential co-worker, but also as a person. 
                    </p>
                    <p>
                    I am studying Information Technology and Computer Programming at Juniata College in Huntingdon, PA. Throughout my career at Juniata, I have played 
                    three years of collegiate level football at the wide receiver position. Through participating in a sport and studying at college I have learned tremendous 
                    time management and organizational skills. Having picked up these skills during my time at Juniata, I have been able to use my hard working mentality to 
                    gain the best education I could receive while playing the sport I love.
                    </p>
                    <p>
                    Due to my dedication to education, I have been presented the opportunity to have the honor of graduating with distinction within the field of Information 
                    Technology. To accomplish this honor, I am currently composing research in the topic of Moore's Law which will be presented at the end of my senior year, in the Spring of 2021.
                    </p>
                    <p>
                    I was born and raised in Lehigh Valley, Pennsylvania and graduated from Parkland High School in 2017. In my spare time, I enjoy teaching myself guitar, 
                    staying physically fit, and gaming on my PC. Please feel free to watch the videos posted below of me playing guitar!
                    </p>
                <br>
                </div>   

                <div class="guitar">
                    <h3 class =headers style="padding-left: 10em;">
                        Guitar: 
                    </h3>  

                    <div align="center">
            
                        <div>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/r5E_9ymR1mw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                            </iframe>

                            <iframe width="560" height="315" src="https://www.youtube.com/embed/pKT4fTUE25o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                            </iframe>
                        </div>

                    <br>

                    <div align="center">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/-rnrWII2O7Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>

                    </div>
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