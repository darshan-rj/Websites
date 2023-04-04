<?php
@ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/sidenav.css"> -->

    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/common-styles.css">


    <!-- Bootstrap CDN -->
    <!-- <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"> -->
    <script src="https://kit.fontawesome.com/a74d0f3882.js" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imprima&family=Nova+Round&family=Poppins&family=Raleway&family=Roboto&family=Shippori+Antique&family=Stoke&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <style>
        @font-face {
            font-family: AquireBold;
            src: url('assets/fonts/AquireBold.otf');
        }

        @font-face {
            font-family: production;
            src: url('assets/fonts/production.ttf');
        }

        @font-face {
            font-family: MonumentReg;
            src: url('assets/fonts/MonumentExtended-Regular.otf');
        }


        @font-face {
            font-family: Aquatico;
            src: url('assets/fonts/Aquatico-Regular.otf');
        }

        @font-face {
            font-family: Agency FB;
            src: url('assets/fonts/AgencyFB-Bold.ttf');
        }


        html {
            scroll-behavior: none;
        }


        body {
            margin: 0;
            background: #150a1c;
        }

        h1 {
            margin-top: 0 !important;
            font-family: AquireBold;
            font-size: 100px;
            background-clip: text;
            background: -webkit-linear-gradient(45deg, #e9415a, #BD0A0A);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            /* color: linear-gradient(#f25c54, #ff2e69); */
            transform: translateY(-475px);
            z-index: 9999;
        }

        canvas {
            width: 100%;
            height: 100%;
        }

        /* ---- particles.js container ---- */
        #particles-js {
            position: fixed;
            width: 100%;
            height: 100%;
            background-color: #25252525;
            /* background-image: url(""); */
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50% 50%;
            z-index: -10;
            letter-spacing: none;
        }

        .logo {
            align-items: center;
            justify-content: center;
            margin: auto;
            transform: translateX(30%);
        }

        .btn {
            margin: 2%;
            font-size: 25px;
            padding-top: 10px;
            padding-left: 20px;
            padding-right: 20px;
            border: 2px solid #ff2e69;
            border-radius: 50px;
            background: #25252525;
            color: #c9184a;
            font-family: AquireBold;
            transform: translateY(-500px);

        }

        .btn:hover {
            border: 2px solid #c50038;
            color: #ff0048;
            font-family: AquireBold;
        }

        .text-center {
            text-align: center;
            justify-content: center;
            align-items: center;
        }

        .container-fluid {
            z-index: 10000;
            top: 0;
            transform: translateY(-300px);
            justify-content: center;
            align-items: center;
            margin: auto;
            padding: auto;
        }

        .container-fluid h2 {
            /* transform: translateX(-100px); */
            background-clip: text;
            background: -webkit-linear-gradient(#a10920, #FF3737);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: Aquatico;
            padding-top: 40px;
            padding-bottom: 40px;
            text-align: center;
        }

        .cards {

            background: transparent;
            backdrop-filter: blur(20px);
            justify-content: center;
            text-align: center;
        }

        .card-title {
            background-clip: text;
            background: -webkit-linear-gradient(#e9415a, #fed0d0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: 'production';
            padding-top: 20px;
            padding-bottom: 20px;
            text-align: center;
            font-size: 28px;
        }

        .card-text {
            padding: 20px;
            color: #ffd6d6;
            font-family: 'Raleway', sans-serif;
            font-size: 16px;
        }

        #visit-ieee {
            /* margin-left: 40%; */
            align-items: center;
            text-align: center;
            padding: 16px 28px;
            border: none;
            background: #ffd6d6;
            color: #BD0A0A;
            border-radius: 2rem;
            font-family: 'Nova Round', cursive;
            font-size: 16px;
        }

        #visit-ieee:hover {
            /* margin-left: 40%; */
            align-items: center;
            text-align: center;
            padding: 16px 28px;
            background: #BD0A0A;
            color: #ffd6d6;
            border-radius: 2rem;
            font-family: 'Nova Round', cursive;
            font-size: 16px;
        }

        .card {
            width: 300px;
            height: 200px;
            margin-top: 0;
            margin-left: auto;
            margin-right: auto;
            padding-left: auto;
            padding-top: 0;
            background: #650404;
            border-radius: 15px;
            box-shadow: 1px 5px 60px 0px #3d0000;
            align-items: center;
            justify-content: center;
        }

        .card .card-border-top {
            width: 50%;
            height: 3%;
            background: #BD0A0A;
            margin: auto;
            border-radius: 0px 0px 15px 15px;
        }

        .card span {
            font-weight: 600;
            color: #ffd6d6;
            font-family: Aquatico;
            text-align: center;
            display: block;
            padding-top: 10px;
            font-size: 20px;
        }

        .card .job {
            font-weight: 400;
            color: #ffd6d6;
            font-family: "Imprima", sans-serif;
            display: block;
            text-align: center;
            padding-top: 3px;
            font-size: 18px;
        }

        .card .img {
            width: 70px;
            height: 80px;
            background: #ff3737;
            border-radius: 15px;
            margin: auto;
            margin-top: 25px;
        }

        footer {
            padding: 3%;
            font-family: Centauri;
        }

        #ieee {
            font-size: 30px;
            text-align: center;
        }

        #ieee span {
            /* font-size: 15px !important; */
            /* font-family: 'Agency FB' !important !important; */
            font-family: 'Agency FB' !important;
            font-size: 30px;
            /* font-weight: 700; */

        }

        #logos_above {
            align-items: center;
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
            width: auto;
        }

        #logos_above img {
            width: 80px;
            height: auto;
        }




        @media only screen and (max-width: 1024px) {

            h1 {
                text-align: center;
                font-size: 100px;
                transform: translateY(-425px);

            }

            .btn {
                margin: 2%;
                font-size: 25px;
                padding-top: 10px;
                padding-left: 20px;
                padding-bottom: 10px;
                padding-right: 20px;
                border: 2px solid #ff2e69;
                color: #c9184a;
                font-family: AquireBold;
                transform: translateY(-450px);

            }

            #ieee {
                font-size: 30px;
                text-align: center;
            }

            #ieee span {
                /* font-size: 15px !important; */
                /* font-family: 'Agency FB' !important !important; */
                font-family: 'Agency FB' !important;
                font-size: 15px;
                /* font-weight: 700; */

            }

            #logos_above {
                align-items: center;
                justify-content: center;
                margin-left: auto;
                margin-right: auto;
                width: auto;
            }

            #logos_above img {
                width: 60px;
                height: auto;
            }

        }

        /*mobile screen*/
        @media only screen and (max-width: 768px) {

            h1 {
                text-align: center;
                font-size: 75px;
                transform: translateY(-425px);

            }

            .btn {
                margin: 2%;
                font-size: 18px;
                padding-top: 10px;
                padding-left: 20px;
                padding-bottom: 10px;
                padding-right: 20px;
                border: 2px solid #ff2e69;
                color: #c9184a;
                font-family: AquireBold;
                transform: translateY(-450px);

            }

            .card {
                width: 300px;
                height: 200px;
                margin-top: 0;
                margin-bottom: 40px;
                margin-left: auto;
                margin-right: auto;
                padding-left: auto;
                padding-top: 0;
                background: #650404;
                border-radius: 15px;
                box-shadow: 1px 5px 60px 0px #3d0000;
                align-items: center;
                justify-content: center;
            }

            #ieee {
                font-size: 20px;
                text-align: center;
            }

            #ieee span {
                font-size: 18px !important;
                /* font-family: 'Agency FB' !important !important; */
                font-family: 'Agency FB' !important;
                /* font-size:30px; */
                font-weight: 700;

            }


            #logos_above {
                /* float: center;
                display: flex;
                flex-direction: column; */
                align-items: center;
                justify-content: center;
                margin-left: auto;
                margin-right: auto;
                width: auto;
            }

            #logos_above img {
                width: 60px;
                height: auto;
            }


        }

        @media only screen and (max-width:425px) {
            h1 {
                text-align: center;
                font-size: 50px;
                transform: translateY(-380px);

            }

            .btn {
                margin: 5%;
                font-size: 18px;
                padding-top: 8px;
                padding-left: 12px;
                padding-bottom: 8px;
                padding-right: 12px;
                border: 2px solid #ff2e69;
                color: #c9184a;
                font-family: AquireBold;
                transform: translateY(-400px);

            }

            .card {
                width: 300px;
                height: 200px;
                margin-top: 0;
                margin-left: auto;
                margin-right: auto;
                padding-left: auto;
                padding-top: 0;
                background: #650404;
                border-radius: 15px;
                box-shadow: 1px 5px 60px 0px #3d0000;
                align-items: center;
                justify-content: center;
            }

            #ieee {
                font-size: 20px;
                text-align: center;
            }

            #ieee span {
                font-size: 20px !important;
                /* font-family: 'Agency FB' !important !important; */
                font-family: 'Agency FB' !important;
                /* font-size:30px; */
                font-weight: 700;


            }


            #logos_above {
                align-items: center;
                justify-content: center;
                margin-left: auto;
                margin-right: auto;
                width: auto;
            }

            #logos_above img {
                width: 60px;
                height: auto;
            }


        }

        @media only screen and (max-width:375px) {

            /* ---- particles.js container ---- */
            #particles-js {
                position: fixed;
                width: 100%;
                height: 100%;
                background-color: #25252525;
                /* background-image: url(""); */
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
                z-index: -1;
            }

            h1 {
                text-align: center;
                font-size: 50px;
                transform: translateY(-400px);

            }

            .btn {
                margin: 5%;
                font-size: 18px;
                padding-top: 8px;
                padding-left: 12px;
                padding-bottom: 8px;
                padding-right: 12px;
                border: 2px solid #ff2e69;
                color: #c9184a;
                font-family: AquireBold;
                transform: translateY(-400px);
            }

            .card {
                width: 300px;
                height: 200px;
                margin-top: 0;
                margin-left: auto;
                margin-right: auto;
                padding-left: auto;
                padding-top: 0;
                background: #650404;
                border-radius: 15px;
                box-shadow: 1px 5px 60px 0px #3d0000;
                align-items: center;
                justify-content: center;
            }


            #ieee {
                padding-left: 10% !important;
                font-size: 10px;
                text-align: center !important;
            }

            #ieee span {
                font-size: 15px !important;
                /* font-family: 'Agency FB' !important !important; */
                font-family: 'Agency FB' !important;
                /* font-size:30px; */
                font-weight: 700;
            }


            #logos_above {
                align-items: center;
                justify-content: center;
                margin-left: auto;
                margin-right: auto;
                width: auto;
            }

            #logos_above img {
                /* display:none; */
                justify-content: end;
                align-items: right;
                width: 50px;
                height: auto;
            }

        }

        @media only screen and (max-width:320px) {

            /* ---- particles.js container ---- */
            #particles-js {
                position: fixed;
                width: 100%;
                height: 100%;
                background-color: #25252525;
                /* background-image: url(""); */
                background-repeat: no-repeat;
                background-size: cover;
                background-position: 50% 50%;
                z-index: -1;
            }

            h1 {
                text-align: center;
                font-size: 50px;
                transform: translateY(-400px);

            }

            .btn {
                margin: 5%;
                font-size: 18px;
                padding-top: 8px;
                padding-left: 12px;
                padding-bottom: 8px;
                padding-right: 12px;
                border: 2px solid #ff2e69;
                color: #c9184a;
                font-family: AquireBold;
                transform: translateY(-400px);
            }

            .card {
                width: 300px;
                height: 200px;
                margin-top: 0;
                margin-left: auto;
                margin-right: auto;
                padding-left: auto;
                padding-top: 0;
                background: #650404;
                border-radius: 15px;
                box-shadow: 1px 5px 60px 0px #3d0000;
                align-items: center;
                justify-content: center;
            }


            #ieee {
                padding-left: 10% !important;
                font-size: 15px;
                text-align: center !important;
            }

            #ieee span {
                font-size: 15px !important;
                /* font-family: 'Agency FB' !important !important; */
                font-family: 'Agency FB' !important;
                /* font-size:30px; */
                font-weight: 700;
            }


            #logos_above {
                align-items: center;
                justify-content: center;
                margin-left: auto;
                margin-right: auto;
                width: auto;
            }

            #logos_above img {
                /* display:none; */
                justify-content: end;
                align-items: right;
                width: 50px;
                height: auto;
            }

        }
    </style>

    <link href="assets/atom2k23.png" rel="icon" style="width:100px;height:100px;">
    <title>ATOM 2K23</title>

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- <script src="node_modules\bootstrap\dist\js\bootstrap.bundle.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r83/three.min.js"></script>
</head>

<body>

    <div id="loader">
        <div class="center">
            <div class="nulled-loader">
                <div class="nulled-inner nulled-one"></div>
                <div class="nulled-inner nulled-two"></div>
                <div class="nulled-inner nulled-three"></div>
            </div>
        </div>
    </div>

    <div id="menu">
        <div id="menu-bar" onclick="menuOnClick()">
            <div id="bar1" class="bar"></div>
            <div id="bar2" class="bar"></div>
            <div id="bar3" class="bar"></div>
        </div>
        <nav class="nav1" id="nav1">
            <ul>
                <li><a href="index.php"><i class="fas fa-home" style="padding-right:10px; color:#650404"></i>Home</a>
                </li>
                <li><a href="event.php"><i class="fas fa-calendar-day" style="padding-right:10px; color:#650404"></i>Events</a></li>
                <li><a href="schedule.php"><i class="fas fa-hourglass-half" style="padding-right:15px; color:#650404"></i>Schedule</a></li>
                <!-- <li><a href="login.php" class="nav-link scrollto">Register</a></li> -->
                <?php require_once 'user.php'; ?>
            </ul>
        </nav>
    </div>

    <div class="menu-bg" id="menu-bg"></div>

    <!-- <ul class="background">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul> -->
    <!-- <section class="img-container">
        <img src="assets/atom.png" alt="" width="500px" height="500px">
    </section> -->
    <!-- particles.js container -->

    <script src="assets/js/particles.min.js"></script>
    <div id="particles-js">
        <canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;"></canvas>
    </div>

    <div class="count-particles"> <span class="js-count-particles"></span></div>



    <div class="container bg-transparent" style="background:rgba(0, 0, 0 , 0);">
        <div class="row mt-2 justify-content-center align-items-center">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <h5 class="card-title text-center" id="ieee">IEEE STUDENTS CHAPTER <span style="font-family:'Agency FB' !important;font-size:30px;font-weight:700;">12951</span></h5>
            </div>
            <!-- <div class="col-lg-2"></div> -->
            <div class="col-lg-3 col-md-12 col-sm-12" id="logos_above">
                <img class="rounded-3" src="assets/atom2k23.png" alt="" width="60px" height="60px;">
                <img src="assets/IEEE SC 12951.png" width="80px" height="80px">
                <img src="assets/PSG LOGO in PNG.png" width="80px" height="60px">
            </div>
        </div>
    </div>



    <!-- <div id="particles-js"></div>
    <div class="count-particles"> <span class="js-count-particles"></span></div>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> -->
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="assets/js/landing.js"></script>


    <!-- <div class="container">
        <div class="row">
            <div class="col-4">
                <img class="mx-auto " src="assets/atom2k23.png">
            </div>
        </div>
    </div> -->

    <h3 class="text-center" style="transform:translateY(-550px); font-family:'Aquatico';color:#e9415a; font-size:20px;">Welcome to the biggest <span style="color:#ffd6d6">PSG Campus-wide</span> technical symposium</h3>

    <h1 href="#" class="text-center mt-4">ATOM 2K23</h1>

    <div class="text-center">
        <button class="btn rounded-5" onclick="register()">Register Now</button>
    </div>

    <section class="container-fluid justify-content-center align-items-center my-4">
        <h2 class="text-center mx-auto">About Us</h2>
        <div class="cards mx-auto mb-3 rounded-4" style="max-width: 80%;">
            <div class="col-md-12">
                <div class="card-body">
                    <h5 class="card-title text-center mx-4">IEEE STUDENTS CHAPTER <span style="font-family:'Agency FB' !important;font-size:30px;font-weight:700;">12951</span></h5>
                    <p class="card-text">The Students’ Chapter of IEEE at PSG College of Technology was initiated in
                        1977. It was started to involve the students in research and encourage new ideas in the
                        respective fields. PSG has always been known to set benchmarks in terms of quality of
                        engineering and is one of the first and foremost institutions to have a Students branch of
                        IEEE. The IEEE Students Chapter of PSG Tech has been actively involved in organizing top
                        notch technical fests every year that has evoked the interest and involvement of students
                        from various parts of the country. It is the biggest technical association at PSG College of
                        Technology.
                    </p>
                    <!-- <div class="justify-content-center align-items-center mx-auto"><button href="https://psgtech.edu/dept/ece/ieee/about.html" type="button" id="visit-ieee" class="text-center">Visit Us</button>
                    </div> -->
                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="container-fluid justify-content-center align-items-center mt-4">
        <h2 class="text-center mx-auto">Developer's Team</h2>
        <div class="row align-items-center justify-content-center">
            <div class="col-md-3 col-sm-12 col-lg-4">
                <div class="card">
                    <div class="card-border-top">
                    </div>
                    <div class="img "><img class="rounded-3" src="assets/developer/ArulVirumbi.JPG" alt="" width=80px height=80px >
                    </div>
                    <span> Arul Virumbi K</span>
                    <p class="job">IV year BE EEE SW</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-lg-4">
                <div class="card">
                    <div class="card-border-top">
                    </div>
                    <div class="img"><img class="rounded-3" src="assets/developer/karthikeyan.JPG" alt="" width=80px height=80px >
                    </div>
                    <span>Karthikeyan N</span>
                    <p class="job">III year BE EEE SW</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-lg-4">
                <div class="card">
                    <div class="card-border-top">
                    </div>
                    <div class="img"><img class="rounded-3" src="assets/developer/darshan.JPG" alt="" width=80px height=80px >
                    </div>
                    <span>Darshan RJ</span>
                    <p class="job">III year BE EEE SW</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12"><center><p class="job" style="margin-top:5%;font-size:30px;font-family:Aquatico; color:#fed0d0"> & OUR TEAM </p></div></center>
    </section> -->

    <!-- <footer class="footer">
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>


        <ul class="social-icon">
            <li class="social-icon__item"><a class="social-icon__link" href="mailto:ieee.studentschapter.12951@gmail.com">
                    <ion-icon name="mail-outline"></ion-icon>
                </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="https://www.linkedin.com/company/ieee-students-chapter-12951/">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a></li>
            <li class="social-icon__item"><a class="social-icon__link" href="https://instagram.com/ieee_sc_12951?igshid=YmMyMTA2M2Y=">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a></li>
        </ul>
        <ul class="menu">
            <li class="menu__item"><a class="menu__link" href="index.php">Home</a></li>
            <li class="menu__item"><a class="menu__link" href="event.php">Events</a></li>
            <li class="menu__item"><a class="menu__link" href="schedule.php">Schedule</a></li>
            <li class="menu__item"><a class="menu__link" href="login.php">Register</a></li>
        </ul>
        <p>IEEE STUDENTS CHAPTER 12951 | PSG COLLEGE OF TECHNOLOGY</p>
        <div class="logos">
            <svg width="100px" height="100px" viewBox="0 0 512 150" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                <g>
                    <path d="M170.745706,19.7479422 L202.07141,19.7479422 L202.07141,132.832287 L170.745706,132.832287 L170.745706,19.7479422 Z M218.508448,132.832287 L218.508448,19.7479422 L304.649871,19.7479422 L304.649871,41.6725232 L249.83202,41.6725232 L249.83202,65.0068463 L300.260689,65.0068463 L300.260689,86.9356929 L249.83202,86.9356929 L249.83202,110.897042 L304.649871,110.897042 L304.649871,132.832287 L218.508448,132.832287 Z M322.2002,132.832287 L322.2002,19.7479422 L408.320295,19.7479422 L408.320295,41.6725232 L353.517374,41.6725232 L353.517374,65.0068463 L403.928981,65.0068463 L403.928981,86.9356929 L353.517374,86.9356929 L353.517374,110.897042 L408.320295,110.897042 L408.320295,132.832287 L322.2002,132.832287 Z M425.85996,132.832287 L425.85996,19.7479422 L512.001383,19.7479422 L512.001383,41.6725232 L457.202727,41.6725232 L457.202727,65.0068463 L507.6186,65.0068463 L507.6186,86.9356929 L457.202727,86.9356929 L457.202727,110.897042 L512.001383,110.897042 L512.001383,132.832287 L425.85996,132.832287 Z M71.4580647,87.6373648 C71.0443129,95.6223484 70.9419413,103.012297 70.351172,111.016475 C73.5118947,111.304396 77.0778382,111.579519 80.4475695,111.088989 L79.4409156,88.7741159 L79.2638981,87.7120107 C76.6982102,87.8122496 74.2690178,87.9146212 71.4580647,87.6373648 Z M51.7195436,65.2137222 C47.8272906,67.1651806 42.1008801,70.1147619 42.7321715,75.4530135 C43.5660734,78.3684709 46.7225306,80.2516815 49.2199707,81.4502821 C63.0252054,87.5328605 81.3518519,87.7397364 95.9270062,83.19913 C99.5249409,81.8128482 104.3556,79.8016731 105.01675,75.3932967 C104.978361,71.7505745 101.122364,69.4578775 98.3519331,68.0630647 L98.3519331,67.8903126 C99.318065,67.5085519 100.429223,67.1651806 101.429479,67.0606763 L101.429479,66.9625702 C96.547634,66.0881462 91.8342756,64.8106341 87.105988,63.5608477 C88.0166686,65.636005 88.6735529,67.8241977 89.4328088,69.9803992 C90.8532146,69.5261253 92.3098769,69.1806212 93.8433179,68.9716125 C96.3364926,69.9420098 99.9067016,71.3304244 100.260737,74.4484923 C100.537993,77.3639497 97.347412,78.7843555 95.3319714,79.9680269 C84.640539,83.8581471 72.6118778,84.2377751 61.461906,81.2796628 C58.3822275,80.3092655 53.9375946,79.0637446 53.5558339,75.1416332 C55.7418937,69.9803992 61.3957911,68.9054975 66.1176804,67.6514456 C63.6906207,66.0881462 61.223039,64.7039971 58.8706253,62.9636801 C56.3305303,63.1044411 54.0101078,64.2155993 51.7195436,65.2137222 L51.7195436,65.2137222 Z M75.339654,34.0650348 L73.9555049,38.5075351 L67.0155645,58.3868172 C68.7537487,58.5638347 70.9056847,58.3868172 72.6118778,58.5638347 L72.6118778,58.7280558 L71.5966929,81.2135478 L71.7715777,81.4502821 C73.9917615,81.6678218 76.7643252,81.7787243 79.0271638,81.3926981 L79.0271638,81.0386631 L78.1207487,59.22925 L78.2572442,58.4913215 L84.3632826,58.3868172 C81.317728,50.3399841 78.3638812,42.2121068 75.5188043,34.0650348 L75.339654,34.0650348 L75.339654,34.0650348 Z M72.1149491,24.0774071 C77.2207319,20.598906 81.8018603,25.4615562 85.7580955,28.2405182 C101.054116,40.552834 115.48851,54.6459889 126.487057,70.5605048 C127.873339,72.6143347 128.500365,75.802783 127.256977,78.1274711 C124.405501,82.8834843 120.558036,87.223613 116.911048,91.6319893 L116.911048,91.8729891 C107.817039,101.553502 98.213305,111.504873 87.8353856,119.703131 C82.7701249,122.784942 78.1207487,129.515874 71.5966929,125.346365 C56.7421494,114.490711 42.5274283,100.994724 30.4774397,86.5198083 C28.4342735,83.3377582 25.2436924,80.7294156 23.8232867,77.1208172 C21.8398373,72.232574 26.211957,68.7263472 28.7136626,65.0452357 C41.0003855,49.8921084 56.2601499,35.0332994 72.1149491,24.0774071 L72.1149491,24.0774071 Z M84.9177954,9.60462431 L79.2638981,1.59191506 C78.5707571,1.16963228 77.7069969,0.470093113 76.9413427,0.265349944 C75.273539,-0.457649374 73.4756381,0.416774579 72.1149491,1.44902139 L61.8841888,14.7743893 C45.4706114,35.1015471 26.0413377,54.0829451 4.84402144,68.6325066 C3.16768674,69.9420098 0.676644845,71.2195219 0.158388697,73.3778561 C-0.398256795,75.3186508 0.612662605,76.9203395 1.81766147,78.1274711 C18.7921499,89.8191592 35.0201788,103.69904 49.4652359,119.528246 C52.028791,122.221899 54.1082139,124.900622 56.6163177,127.430053 C60.8412783,133.051959 65.8041674,138.718653 69.6878894,144.750045 C70.9056847,146.023292 71.1146934,148.115511 73.0192314,148.736139 C74.5100176,149.252262 76.3505734,149.602032 77.7731119,148.736139 L79.1871194,147.315733 C96.7502444,122.435173 119.024595,100.090442 143.911554,82.0495825 C146.402596,79.8251332 151.160742,78.9976296 151.228989,74.8686423 C151.051972,72.9641043 149.942946,71.0872919 148.307134,70.0465141 L147.89978,69.9803992 C135.092668,61.2681508 123.159981,51.4148857 111.918301,40.2371883 L99.4950825,27.2594572 C94.4618129,21.6802058 89.571437,15.4995214 84.9177954,9.60462431 L84.9177954,9.60462431 Z M70.2807915,21.019056 C75.273539,17.1332013 81.556595,20.3600389 85.7580955,23.9345134 C90.1579409,27.2978465 94.741202,31.1090553 98.7635522,35.003441 L99.4950825,35.4235911 C110.634391,45.7588557 120.980319,57.2458006 129.479293,69.3896298 C130.857044,71.5031765 132.074839,73.898245 131.30492,76.7027999 C128.470506,83.7877667 122.712105,89.4352657 117.676703,95.6223484 C106.78266,107.34816 95.2914493,118.694344 82.4267535,127.745699 C79.8248091,129.586254 76.3143168,131.286049 73.1962489,129.825121 C63.7268773,124.868631 55.7418937,116.749284 47.4540609,109.350804 C37.8417956,100.438078 28.1954065,90.060159 20.909962,79.2045055 C19.8265294,77.6817282 19.5215474,75.802783 19.5535385,73.7937407 C20.489812,70.0465141 23.0576326,66.9625702 25.486825,63.8039802 C34.094569,52.8331587 44.6388423,42.4275137 55.2876198,32.9218855 C55.5328851,32.678753 55.987159,32.1604968 56.3731852,31.9130988 C60.9457826,27.9589964 65.4885217,24.4591678 70.2807915,21.019056 L70.2807915,21.019056 Z" fill="#1A1918"></path>
                </g>
            </svg>


        </div>
    </footer> -->

    <!--Hey! This is the original version
of Simple CSS Waves-->

    <div class="header">
        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255, 55, 55, 0.7)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255, 55, 55,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(255, 55, 55,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="9" fill="#ff3737" />
                </g>
            </svg>
        </div>
        <!--Waves end-->
    </div>
    <!--Header ends-->


    <!--Content starts-->
    <footer class="footer">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6">
                <ul class="social-icon">
                    <li class="social-icon__item"><a class="social-icon__link" href="mailto:ieee.studentschapter.12951@gmail.com">
                            <ion-icon name="mail-outline"></ion-icon>
                        </a></li>
                    <li class="social-icon__item"><a class="social-icon__link" href="https://www.linkedin.com/company/ieee-students-chapter-12951/">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a></li>
                    <li class="social-icon__item"><a class="social-icon__link" href="https://instagram.com/ieee_sc_12951?igshid=YmMyMTA2M2Y=">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a></li>
                </ul>

                <ul class="menu">
                    <li class="menu__item"><a class="menu__link" href="index.php">Home</a></li>
                    <li class="menu__item"><a class="menu__link" href="event.php">Events</a></li>
                    <li class="menu__item"><a class="menu__link" href="schedule.php">Schedule</a></li>
                    <li class="menu__item"><a class="menu__link" href="login.php">Register</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6">
                <h4 class="text-center" style="color:#7d1935;font-weight:900;">CONTACT</h4>
                <ul class="contact text-left">
                    <li><ion-icon name="call-outline" style="color:#ffd6d6; font-size:20px;"></ion-icon><a style="margin-left:10px;color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+916383405138">SASHANK T M - 6383405138</a></li>
                    <li><ion-icon name="call-outline" style="color:#ffd6d6; font-size:20px;"></ion-icon><a style="margin-left:10px;color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+919500288886">KRISHNA R S - 9500288886</a></li>
                    <li><ion-icon name="call-outline" style="color:#ffd6d6; font-size:20px;"></ion-icon><a style="margin-left:10px;color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+918110815874">SHUBIKSHA M - 8110815874</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 m-4">
            <h5 class="text-center mx-4" style="font-family:'production';color:#ffd6d6">IEEE STUDENTS CHAPTER <span style="font-family:'Agency FB' !important;font-size:20px;font-weight:700;color:#ffd6d6">12951</span>
                | <span style="font-family:'production'; font-size:20px; color:#ffd6d6">PSG COLLEGE OF TECHNOLOGY</span>
            </h5>
        </div>
        <p style="font-size:10px;color:#BD0A0A">Made with Love "<em>#FAMILIEEE</em>"</p>
    </footer>
    <!--Content ends-->

    <script type=" module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- <script src="node_modules\bootstrap\dist\js\bootstrap.bundle.js"></script> -->
    <script>
        function menuOnClick() {
            document.getElementById("menu-bar").classList.toggle("change");
            document.getElementById("nav1").classList.toggle("change");
            document.getElementById("menu-bg").classList.toggle("change-bg");
        }
    </script>

    <script>
        function register() {
            window.open('login.php', '_self');
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script>
        jQuery(document).ready(function($) {
            "use strict"
            $("#loader").delay(1000).fadeOut("slow");
        });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 4000,
            once: true,
        });
    </script>
    <script src="assets/js/background.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>