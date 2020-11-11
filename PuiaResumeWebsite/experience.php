<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <title>My Experiences</title>

    
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

    .photos{
        float:left;
        padding: 5em;
        height: 400px;
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

    .text{
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
                <h1> My Experiences </h1>

                <?php 
                include 'NavBarLeft.html';
                include 'header.html';
                ?>

            </div>

            <br>
            <br>
            <br>
            <div>
               <a  href="https://www.juniata.edu/academics/departments/it-computers-media/innovations-for-industry/"> <img class="photos" src="experience.jpg"></a>

                    <div class=container>

                    <h3>
                    <b><u>Innovations for Industries (I4I)</u></b>
                    </h3>

                    <p class=text>
                    I4I is an extremely unique course that I have had the opportunity to take three times in the Information Technology department at Juniata.
                    I4I is a chance for college students to have real world experience prior to graduating college. Within the class, each student is assigned
                    to a group and paired with a real world client. This client will give the group a technology project that varies from client to client. The 
                    students have the opportunity to solve issues relevant to actual employment opportunities and gain experience in presenting and working in 
                    the real world. 
                    </p>
                    <p class=text>
                    During my first semester of I4I, I was also required to take a Project Management class. Taking Project Management along with I4I prepares 
                    students to become a Project Lead for future groups. Throughout the course, students gain skills enabling them to manage people in the workplace, 
                    work with a variety of people and personalities, deal with group conflicts, and use various leadership skills. Since being involved with I4I 
                    multiple times, I have had the opportunity to be a group member once and the Project Lead twice.
                    </p>
                    <p class=text>
                    Below are the three projects I have worked with in my three semesters of I4I class.
                    </p>
                    <br>
                    <p>
                    <u>Hadoop Cluster for Data Science Program (group member) Fall Semester 2019</u>
                    </p>
                    <p class = text>
                    For this project, our client was a professor on campus that was the head of the masters data science program at Juniata. His goal for us 
                    was to create a cloud and physical hardware Hadoop Cluster for the masters data science students to access. We created an AWS based Hadoop system 
                    that automatically opens and closes when the student uses the cluster. This was for remote students to be able to access a Hadoop cluster while 
                    not on the Juniata network. For the physical hardware setup, we ordered a physical Hadoop cluster for our campus and for on campus data science students. 
                    </p>
                    <p class = text>
                    During our semester in the class, we did not get the chance to configure the physical cluster due to a late delivery time. However, I am currently still 
                    working on this project as an IT practicum credit to get the cluster up and running on the network and the software configured properly.
                    </p>
                    <br>
                    <u>Altoona Railroaders Museum Project (Project Leader)Spring Semester 2020</u>
                    </p>
                    <p class = text>
                    This project required a lot of problem solving and open brainstorming with our client. The client wanted to know when the trains were going to be passing 
                    through the museum so the customers would know if they were going to see a train during their time of visitation. The main problem was the train schedules 
                    could not be released for confidentiality reasons. So as a team we improvised and used past train data to best predict a schedule of when the trains will 
                    be passing through. Once we found this information we used Google Apps Script to create a web interface with the data that is automatically updated. This 
                    was for the museum to put on display for the customer’s convenience. 
                    </p>
                    <br>
                    <u>Muni-Link Project (Project Leader) Fall Semester 2020</u>
                    </p>
                    <p class = text>
                    Muni-Link offers an online billing and web presence platform for Municipal Authorities. The company wanted a more efficient way to process invoice reports. 
                     Our project goal was to create an automated system that created their reports and emailed them out to desired recipients. This was
                     done by using Jaspersoft Reports Studio and Jaspersoft Server. Jaspersoft Reports Studio was used to pull in the data from the company’s database and then 
                     manipulate the data to create the PDF or CSV report. From the creation of the report, Jaspersoft Server  was used to create an automated schedule that would 
                     send out an email to the desired recipients on a monthly basis.

                    </p>
                    <br>
                    <br>
                    <h3>
                    <b><u>Touchpoint Industries Internship (Summer of 2019 - Winter of 2020)</u></b>
                    </h3>
                    <br>
                    <p class = text>
                    Touchpoint Industries is a small startup company located in Phoenixville, Pennsylvania. Their main goal is to create, distribute, implement, and maintain clock 
                    in/ clock out kiosks at school districts around the country. The company is partnered with Frontline which is a software company that works exclusively with school districts. 
                    </p>
                    <p class = text>
                    During my internship at Touchpoint I found that I had gained a lot of valuable work experience in both hardware and software/ support work. I first came on working on hardware
                     and my main task was to build different kinds of kiosks varying from their most basic model to the most complicated. From this, I then started to work on some of their older 
                     more complicated models that were broken and needed repair. These models contained physical computer boards rather than the easy to use components on the newer models. I then 
                     began to shift my work to the support side of the company. This work was more software based. Throughout working with the support team, I gained experience in troubleshooting 
                     software, remote installation and fixing of said software, as well as, interacting with the customers via email. 
                    </p>

                    <ul>
                    <li>	Assembled units and worked with hardware </br>
                    <li>	Worked support </br>
                        <li style="text-indent: 50px">	Tested, troubleshot, and fixed different Windows 10 issues</br>
                        <li style="text-indent: 50px">	Contacted and emailed clients who had issues/questions</br>
                    <li>	Worked in teams in multiple different departments of the company</br>
                        <li style="text-indent: 50px">	Instructed and helped teach other interns</br>
                    <li>	Multitasked and worked multiple projects at once</br>
                    <li>	Fixed broken laptops/tablets </br>
                        <li style="text-indent: 50px">	Disassembled computers, fixed hardware issues, and reassembled </br>
                    <li>	Worked with different software involved with the company</br>
                        <li style="text-indent: 50px">	LogMeIn, Acronis True Image, Slack, IdentiMetrics, Frontline Software</br>
                    </ul>


                    <br>
                    <br>

                    <h3>
                    <b><u>Neff's Preschool Website</u></b>
                    </h3>
                    <a href="https://www.neffsuccpreschool.org/"> <u>www.neffsuccpreschool.org</u> </a>
                    <br>
                    <br>
                    <p class = text>
                    The creation of the Neff’s Preschool Website was one of my earlier works that I completed my Freshman year of college. The preschool wanted an easy and friendly website to 
                    replace their old outdated site. For this, I created a website using Weebly. Using Weebly allowed me to create a nice user interface that contained everything the preschool needed. 
                    Using this software enabled me to hand off editing responsibilities to the director of the preschool for her to update documents and newsletters easily via the Weebly editing tools. 
                    I still continue to maintain this site and add components as needs for the preschool arise. In the summer of 2020, I recently added an ecommerce site that allows for the clients 
                    to pay for their student’s tuition online!
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