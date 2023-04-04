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
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-UkVD+zxJKGsZP3s/JuRzapi4dQrDDuEf/kHphzg8P3v8wuQ6m9RLjTkPGeFcglQU" crossorigin="anonymous">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>

    <!-- Font Awesome Icons-->
    <script src="https://kit.fontawesome.com/a74d0f3882.js" crossorigin="anonymous"></script>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imprima&family=Nova+Round&family=Poppins&family=Raleway&family=Roboto&family=Shippori+Antique&family=Stoke&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vanta/0.5.24/vanta.fog.min.js"></script> -->
    <!-- <link rel="stylesheet" href="modal.css"> -->
    <link rel="stylesheet" href="assets/css/event.css">
    <link rel="stylesheet" href="assets/css/modal.css">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/common-styles.css">

    <link href="assets/atom2k23.ico" rel="icon">
    <title>ATOM 2K23</title>
    <style>
        .panel p h5 {
            margin-bottom: 50px;
            z-index: 100;
            position: absolute;
        }
    </style>
    <script>
        $(document).ready(function() {
            $("#btn_1").click(function() {
                evname = "ELECTRIXPLORE";
                registerEvent(evname);

            });
            $("#btn_2").click(function() {
                evname = "TECHNOWIZ";
                registerEvent(evname);
            });
            $("#btn_3").click(function() {
                evname = "TECHTONIC";
                registerEvent(evname);
            });
            $("#btn_4").click(function() {
                evname = "TECHIPEDIA";
                registerEvent(evname);
            });
            $("#btn_5").click(function() {
                evname = "TECHNOPHILE";
                registerEvent(evname);
            });
            $("#btn_6").click(function() {
                evname = "TECHNOFRENZY";
                registerEvent(evname);
            });
            $("#btn_7").click(function() {
                evname = "THE LOST FORTUNE";
                registerEvent(evname);
            });
            $("#btn_8").click(function() {
                evname = "MATTER MIND";
                registerEvent(evname);
            });
            $("#btn_9").click(function() {
                evname = "FINDING FELONG";
                registerEvent(evname);
            });
            $("#btn_10").click(function() {
                evname = "SYNERGY";
                registerEvent(evname);
            });
            $("#btn_11").click(function() {
                evname = "FUNTASTIC TRIVIA";
                registerEvent(evname);
            });
            $("#btn_12").click(function() {
                evname = "FANTASTIC FRIDAZE";
                registerEvent(evname);
            });
            $("#btn_13").click(function() {
                fsname = "RETRO CRICKET AUCTION"
                registerFlagEvent(fsname);
            });
            $("#btn_14").click(function() {
                fsname = "ATOMOTECH"
                registerFlagEvent(fsname);
            });
            $("#btn_16").click(function() {
                wsname = "CLOUD COMPUTING";
                registerWorkshop(wsname);
            });
            $("#btn_15").click(function() {
                wsname = "SMART ROVER USING IOT";
                registerWorkshop(wsname);
            });
            $("#btn_17").click(function() {
                wsname = "MISSING PIECES OF BUSINESS SAGA";
                registerWorkshop(wsname);
            });

        });

        function registerEvent(evname) {

            $.ajax({
                type: "POST",
                url: "eregistered.php",
                data: "evname=" + evname,
                success: function(html) {
                    if (html == 'true') {

                        alert(`You have Registered for ${evname}`);

                    } else if (html == 'rem') {

                        alert("Already Registered");

                    } else {

                        alert("Login before registering to a Event")

                        window.location.href = "login.php";

                    }
                }

            });
        }

        function wsfees(wsname) {
            ftype = wsname;
            $.ajax({
                type: "POST",
                url: "modules/pay_process.php",
                data: "type=" + ftype,
                success: function(html) {
                    if (html == 'false') {
                        $("#add_err1").html('<div class="alert alert-danger"> \
                            <strong>Please Try Again Later.</strong> \ \
                        </div>');

                        window.location.href = "profile.php";

                    } else {
                        window.location.href = html;
                    }
                },
                beforeSend: function() {
                    $("#add_err1").html("Loading...");
                }
            });
        }

        function registerFlagEvent(fsname) {
            $.ajax({
                type: "POST",
                url: "flagregister.php",
                data: "fsname=" + fsname,
                success: function(html) {
                    if (html == 'true') {

                        alert(`You have Registered for ${fsname}`);


                    } else if (html == 'rem') {

                        alert("Already Registered");

                    } else if (html == 'genfee') {
                        var val = confirm("You Need to pay General fee! \n Do not close the page before the payment confirmation.");
                        if (val == true) {
                            generalfee();
                        }
                    } else {
                        alert("Login before registering to a Event")
                        window.location.href = "login.php";
                    }
                }

            });
        }

        function registerWorkshop(wsname) {
            $.ajax({
                type: "POST",
                url: "wregistered.php",
                data: "wsname=" + wsname,
                success: function(html) {
                    if (html == 'true') {
                        if (wsname == "MISSING PIECES OF BUSINESS SAGA") {
                            alert(`You have Registered for ${wsname}`);
                        } else {
                            var val1 = confirm(" Confirm to pay workshop fee. \n Do not close the page before the payment confirmation. \n After the payment do return back to this page.");
                            if (val1 == true) {
                                let wstype = wsname.substring(0, 3).toUpperCase();
                                wsfees(wstype);
                            }
                        }
                    } else if (html == 'rem') {
                        alert("Already Registered");

                    } else if (html == 'full') {
                        alert("Oops! We're sorry. All the slots are full for this Workshop. Thank you for checking out.");

                    } else if (html == 'false1') {
                        alert("Oops!");

                    } else {
                        alert("Login before registering to a Event");
                        // alert(html);
                        // alert(html);
                        window.location.href = "login.php";
                    }
                }

            });
        }
    </script>
    <script>
        $('.txt').html(function(i, html) {
            var chars = $.trim(html).split("");

            return '<span>' + chars.join('</span><span>') + '</span>';
        });
    </script>
    <style>
        @font-face {
            font-family: Aquatico;
            src: url('assets/fonts/Aquatico-Regular.otf');
        }

        @font-face {
            font-family: VisbyCF-Bold;
            src: url('../fonts/AquireBold.otf');
        }

        @font-face {
            font-family: futurism;
            font-style: normal;
            font-weight: normal;
            src: url("assets/fonts/Futurism.TTF");
        }
    </style>


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
                <li><a href="schedule.php"><i class="fas fa-hourglass-half" style="padding-right:10px; color:#650404"></i>Schedule</a></li>
                <!-- <li><a href="login.php" class="nav-link scrollto">Register</a></li> -->
                <?php require_once 'user.php'; ?>
            </ul>
        </nav>
    </div>

    <div class="menu-bg" id="menu-bg"></div>

    <!-- <div class="header justify-content-center">
        <h2 class="text-center text-#ffd6d6">ATOM 2K23</h2>
        <ul>
            <li><a href="#technical">TECHNICAL</a></li>
            <li><a href="#non-technical">NON-TECHNICAL</a></li>
            <li><a href="#flagship">FLAGSHIP</a></li>
            <li><a href="#workshop">WORKSHOP</a></li>
        </ul>
    </div> -->

    <ul class="background">
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
    </ul>
    <!-- <div id="vantajs"></div> -->
    <div id="add_err1"></div>
    <div class="w3-container">
        <div class="row">
            <div class="col-lg-12" id="Tech" style="padding-bottom: 50px;"><br></div>
            <div class="col-lg-12">
                <h3 style="height: 70px; color: #ffd6d6;text-shadow: 0 0 2px #f34068, 0 0 3px #ffffff, 0 0 5px #9bf3ae;text-align: center; font-size: 30px; margin-bottom:20px; font-weight:500; font-family:'Aquatico'">
                    TECHNICAL EVENTS</h3>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card1">
                    <div class="card1-img" style="background-image: url(assets/img/tech/ELECTRIXPLORE.png);">
                        <h3 class="Event-title" style="position: relative;top:250px;color: rgb(221, 214, 214);font-size: 20px;text-align: center;">
                            ELECTRIXPLORE</h3>
                    </div>
                    <div class="card1-body">
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <div class="content">
                            <h2 class="title">ELECTRIXPLORE</h2>
                            <p class="para">Get ready to electrify your mind and unleash your creativity at our
                                circuit-themed event</p>
                            <button onclick="document.getElementById('id01').style.display='block'" class="card-btn">View
                                More</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card1">
                    <div class="card1-img" style="background-image: url(assets/img/tech/techowiz.png);">
                        <h3 class="Event-title" style="position: relative;top:250px;color: rgb(221, 214, 214);font-size: 20px;text-align: center;">
                            TECHNOWIZ</h3>
                    </div>
                    <div class="card1-body">
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <div class="content">
                            <h2 class="title">TECHNOWIZ</h2>
                            <p class="para"> Unleash your inner problem-solver and wordsmith with our exciting rounds
                                of mind-bending challenges.</p>
                            <button onclick="document.getElementById('id02').style.display='block'" class="card-btn">View
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card1">
                    <div class="card1-img" style="background-image: url(assets/img/tech/TECHTONIC.png);">
                        <h3 class="Event-title" style="position: relative;top:250px;color: rgb(221, 214, 214);font-size: 20px;text-align: center;">
                            TECHTONIC</h3>
                    </div>
                    <div class="card1-body">
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <div class="content">
                            <h2 class="title">TECHTONIC</h2>
                            <p class="para">Join the tech revolution and ride the wave of change by unlocking the future
                                of tech at <b>Techtonic</b></p>
                            <button onclick="document.getElementById('id03').style.display='block'" class="card-btn">View
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card1">
                    <div class="card1-img" style="background-image: url(assets/img/tech/Techipedia.png);">
                        <h3 class="Event-title" style="position: relative;top:250px;color: rgb(221, 214, 214);font-size: 20px;text-align: center;">
                            TECHIPEDIA</h3>
                    </div>
                    <div class="card1-body">
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <div class="content">
                            <h2 class="title">TECHIPEDIA</h2>
                            <p class="para">Get ready to unleash your curiosity and quick thinking as we put your Physics, Mathematics and coding knowledge to the test in this event</p>
                            <button onclick="document.getElementById('id04').style.display='block'" class="card-btn">View
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card1">
                    <div class="card1-img" style="background-image: url(assets/img/tech/Technophile.png);">
                        <h3 class="Event-title" style="position: relative;top:250px;color: rgb(221, 214, 214);font-size: 20px;text-align: center;">
                            TECHNOPHILE</h3>
                    </div>
                    <div class="card1-body">
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <div class="content">
                            <h2 class="title">TECHNOPHILE</h2>
                            <p class="para">Think and decode the master in you - explore and break your limits. Show
                                your skills and be the best of the rest in a battle of technicalities</p>

                            <button onclick="document.getElementById('id05').style.display='block'" class="card-btn">View
                                More</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card1">
                    <div class="card1-img" style="background-image: url(assets/img/tech/Technofrenzy.png);">
                        <h3 class="Event-title" style="position: relative;top:250px;color: rgb(221, 214, 214);font-size: 20px;text-align: center;">
                            TECHNOFRENZY</h3>
                    </div>
                    <div class="card1-body">
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <div class="content">

                            <h2 class="title">TECHNOFRENZY</h2>
                            <p class="para">Breakthroughs, connections and inspiration!
                                Discover the power of possibility in an immersive tech experience
                            </p>

                            <button onclick="document.getElementById('id06').style.display='block'" class="card-btn">View
                                More</button>
                            <!-- <button class="Veiw-btn" onclick="document.getElementById('id01').style.display='block'"> Veiw More
                                </button> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12" id="NonTech" style="padding-bottom: 50px;"><br></div>
            <div class="col-lg-12">
                <h3 style="height: 70px; color: #ffd6d6;text-shadow: 0 0 2px #f34068, 0 0 3px #ffffff, 0 0 5px #9bf3ae;text-align: center; font-size: 30px; margin-bottom:20px; font-weight:500;font-family:'Aquatico'">
                    NON - TECHNICAL EVENTS</h3>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card1">
                    <div class="card1-img" style="background-image: url(assets/img/Non-tech/the_lost_fortune.png);">
                        <h3 class="Event-title" style="position: relative;top:250px;color: rgb(221, 214, 214);font-size: 20px;text-align: center;">
                            THE LOST FORTUNE</h3>
                    </div>
                    <div class="card1-body">
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <div class="content">
                            <h2 class="title">THE LOST FORTUNE </h2>
                            <p class="para">Hey Voyagers!! The Island adventures awaits!! Prepare yourselves to get
                                lost in paradise!!</p>
                            <button onclick="document.getElementById('id07').style.display='block'" class="card-btn">View
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card1">
                    <div class="card1-img" style="background-image: url(assets/img/Non-tech/matter_master.png);">
                        <h3 class="Event-title" style="position: relative;top:250px;color: rgb(221, 214, 214);font-size: 20px;text-align: center;">
                            MATTER MIND</h3>
                    </div>
                    <div class="card1-body">
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <div class="content">
                            <h2 class="title">MATTER MIND</h2>
                            <p class="para">Solve the clues with your cognitive abilities and uncover the treasure with
                                your vocabulary.</p>
                            <button onclick="document.getElementById('id08').style.display='block'" class="card-btn">View
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card1">
                    <div class="card1-img" style="background-image: url(assets/img/Non-tech/Finding_felony.png);">
                        <h3 class="Event-title" style="position: relative;top:250px;color: rgb(221, 214, 214);font-size: 20px;text-align: center;">
                            FINDING FELONY</h3>
                    </div>
                    <div class="card1-body">
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <div class="content">
                            <h2 class="title">FINDING FELONY</h2>
                            <p class="para">Get yourself ready to experience the fun.Are you a quicky thinker? Here is an amazing opportunity
                                to bring up your investigating skill. </p>
                            <button onclick="document.getElementById('id09').style.display='block'" class="card-btn">View
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card1">
                    <div class="card1-img" style="background-image: url(assets/img/Non-tech/SYNERGY.png);">
                        <h3 class="Event-title" style="position: relative;top:250px;color: rgb(221, 214, 214);font-size: 20px;text-align: center;">
                            SYNERGY</h3>
                    </div>
                    <div class="card1-body">
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <div class="content">
                            <h2 class="title">SYNERGY</h2>
                            <p class="para">A team of 2 venturing through the unknown, locked in a race against time.
                                Can they beat their rivals in time?</p>
                            <button onclick="document.getElementById('id010').style.display='block'" class="card-btn">View
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card1">
                    <div class="card1-img" style="background-image: url(assets/img/Non-tech/Funtastic_trivia.png);">
                        <h3 class="Event-title" style="position: relative;top:250px;color: rgb(221, 214, 214);font-size: 20px;text-align: center;">
                            FUNTASTIC TRIVIA</h3>
                    </div>
                    <div class="card1-body">
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <div class="content">
                            <h2 class="title">FUNTASTIC TRIVIA</h2>
                            <p class="para"> Get into a passionate pursuit of fun events with a sip of tricky puzzles
                            </p>
                            <button onclick="document.getElementById('id011').style.display='block'" class="card-btn">View
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card1">
                    <div class="card1-img" style="background-image: url(assets/img/Non-tech/fantastic_fridaze.png);">
                        <h3 class="Event-title" style="position: relative;top: 250px;color: rgb(221, 214, 214);font-size: 20px;text-align: center;">
                            FANTASTIC FRIDAZE </h3>
                    </div>
                    <div class="card1-body">
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <div class="content">
                            <h2 class="title">FANTASTIC FRIDAZE</h2>
                            <p class="para">"Nothing exists unless or until it is observed" Ready to observe and explore?
                                Then <em>Fantastic Fridaze</em> is yours! </p>
                            <button onclick="document.getElementById('id012').style.display='block'" class="card-btn">View
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12" id="flag" style="padding-bottom: 50px;"><br></div>
            <div class="col-lg-12">
                <h3 style="height: 70px; color: #ffd6d6;text-shadow: 0 0 2px #f34068, 0 0 3px #ffffff, 0 0 5px #9bf3ae;text-align: center; font-size: 30px; margin-bottom:20px; font-weight:500; font-family:'Aquatico'">
                    FLAGSHIP</h3>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card1">
                    <div class="card1-img" style="background-image: url(assets/img/project_expo/IPL_auction.png);">
                        <h3 class="Event-title" style="position: relative;color: rgb(221, 214, 214);top:250px;font-size: 20px;text-align: center;">
                            RETRO CRICKET AUCTION</h3>
                    </div>
                    <div class="card1-body">
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <div class="content">
                            <h2 class="title">RETRO CRICKET AUCTION</h2>
                            <p class="para">Cricketing glory is just a bid away!</p>
                            <button onclick="document.getElementById('id013').style.display='block'" class="card-btn">View
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card1">
                    <div class="card1-img" style="background-image: url(assets/img/project_expo/pro-ex.png);">
                        <h3 class="Event-title" style="position: relative;color: rgb(221, 214, 214);top:250px;font-size: 20px;text-align: center;">
                            ATOMOTECH</h3>
                    </div>
                    <div class="card1-body">
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <div class="content">
                            <h2 class="title">ATOMOTECH</h2>
                            <p class="para">Creativity is thinking up new things while innovation is doing it! This
                                is the opportunity to unleash your talents and Innovation</p>
                            <button onclick="document.getElementById('id014').style.display='block'" class="card-btn">View
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12" id="Workshop" style="padding-bottom: 50px;"><br></div>
            <div class="col-lg-12">
                <h3 style="height: 70px; color: #ffd6d6;text-shadow: 0 0 2px #f34068, 0 0 3px #ffffff, 0 0 5px #9bf3ae;text-align: center; font-size: 30px; margin-bottom:20px; font-weight:500;font-family:'Aquatico'">
                    WORKSHOP</h3>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card1">
                    <div class="card1-img" style="background-image: url(assets/img/Workshop/ROVER_USING_IOT.png);">
                        <h3 class="Event-title" style="position: relative;top:250px;color: rgb(221, 214, 214);font-size: 20px;text-align: center;">
                            SMART ROVER USING IOT</h3>
                    </div>
                    <div class="card1-body">
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <div class="content">
                            <h2 class="title">SMART ROVER USING IOT</h2>
                            <p class="para">“Dive into the world of IoT to gain hands-on experience on how to
                                build and program smart rovers”.</p>
                            <button onclick="document.getElementById('id015').style.display='block'" class="card-btn">View
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card1">
                    <div class="card1-img" style="background-image: url(assets/img/Workshop/cloud_computing.png);">
                        <h3 class="Event-title" style="position: relative; top:250px; color: rgb(221, 214, 214);font-size: 20px;text-align: center;">
                            CLOUD COMPUTING</h3>
                    </div>
                    <div class="card1-body">
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <div class="content">
                            <h2 class="title">CLOUD COMPUTING</h2>
                            <p class="para">Join us for an action-packed one-day workshop where you'll learn the ins and
                                outs of cloud computing</p>
                            <button onclick="document.getElementById('id016').style.display='block'" class="card-btn view">View
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="card1">
                    <div class="card1-img" style="background-image: url(assets/img/Workshop/free.png);">
                        <h3 class="Event-title" style="position: relative;top:225px;color: rgb(221, 214, 214);font-size: 18px;text-align: center;">
                            MISSING PIECES OF BUSINESS SAGA</h3>
                    </div>
                    <div class="card1-body">
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <span class="bg"></span>
                        <div class="content">
                            <h2 class="title">MISSING PIECES OF BUSINESS SAGA</h2>
                            <p class="para">Craft your winning resume and discover the perfect money-life balance and fulfillment</p>
                            <button onclick="document.getElementById('id017').style.display='block'" class="card-btn view">View
                                More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <!-- Modal -->
    <div id="id01" class="w3-modal w3-animate-opacity" style="z-index: 1000;position:fixed;">
        <div class="w3-modal-content w3-card-4 " style="border-radius: 2rem; padding: 0px 15px 15px 15px; position: relative;text-align: center;">
            <header class="w3-container w3" style="border-radius: 0 0 2rem 2rem; background-color: rgba(255, 255, 255, 0);">
                <div class="close-container" onclick="document.getElementById('id01').style.display='none'">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                    <label class="close">close</label>
                </div>
            </header>
            <div class="w3-container">
                <h2 class="modal-event-name">ELECTRIXPLORE</h2>
                <button class="accordion">Description</button>
                <div class="panel">
                    <p>Join the exciting and challenging two-rounded technical competition to test your know-how.
                        Battle it out with other participants to see who has the ultimate technical knowledge in the
                        field of electrical and electronics. Answer tough questions and race to the finish to prove
                        that you are the best. Are you ready to become a technical champion? </p>
                    <h2 class="round">Round 1</h2>
                    <h4 class="round-tag">SPARK SPRINT</h4>
                    <p>
                        Are you ready for the ultimate test of knowledge and skill? Round one is here, and it's time
                        to put your brains to the test! Each team will face 20 challenging questions based on their
                        answers from Round Zero. Only the best and brightest will advance to the next round - will
                        your team make the cut? It's time to show off your expertise and prove that you have what it
                        takes to be a champion!
                    </p>
                    <h2 class="round">Round 2</h2>
                    <h4 class="round-tag">CURRENT CLASH</h4>
                    <p>Teams will compete in a quiz round with a buzzer and projected questions. The first team to
                        answer correctly earns a full point, while the second team to answer correctly earns half a
                        point. The game requires speed, knowledge, and strategy.</p>
                </div>

                <button class="accordion">EVENT RULES</button>
                <div class="panel">
                    <p>
                    <ul>
                        <li>Participants should strictly adhere to the time limit.</li>
                        <li>Participants are strictly prohibited from using the internet</li>
                        <li>Participants are prohibited from looking for answers on the internet.</li>
                    </ul>
                    <h5>TEAM SIZE</h5>
                    2 PARTICIPANTS
                    </p>
                </div>

                <button class="accordion">Date</button>
                <div class="panel">
                    <h2 class="date">29/03/23</h2>
                    <h4 class="day">Wednesday</h4>
                </div>
                <button class="accordion">contact</button>
                <div class="panel">
                    <p>

                    <ul style="list-style-type: none;">
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+917871188375">Nikita Giridhar - 7871188375</a></li>
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+917010105851">Sakthi SriDevi S - 7010105851</a></li>
                    </ul><br>

                    </p>
                </div>
                <button class="btn-7" id="btn_1" style="color: #FFD6D6;"><span>Register</span></button>

            </div>
        </div>
    </div>

    <div id="id02" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-card-4 " style="border-radius: 2rem; padding: 0px 15px 15px 15px; position: relative;text-align: center;">
            <header class="w3-container w3" style="border-radius: 0 0 2rem 2rem; background-color: rgba(255, 255, 255, 0);">
                <div class="close-container" onclick="document.getElementById('id02').style.display='none'">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                    <label class="close">close</label>
                </div>
            </header>
            <div class="w3-container">
                <h2 class="modal-event-name">TECHNOWIZ</h2>
                <button class="accordion">Description</button>
                <div class="panel">
                    <p> Challenge your mind with interesting technical puzzles and enhance your thinking with
                        amazing segments. Test your word association skills in our thrilling connection game round
                        by racing to solve the crossword puzzle before anyone else.</p>

                    <h2 class="round">Round 1</h2>
                    <h4 class="round-tag">CONNECTZ</h4>
                    <p>
                        The present round entails a connection game that features pictures which are provided both
                        in the question paper and on the screen. Participants are required to identify the words and
                        complete the crossword puzzle using the provided clues.
                        This round is timed, and the team that completes the task within the shortest duration earns
                        the chance to progress to the subsequent round.

                    </p>
                    <h2 class="round">Round 2</h2>
                    <h4 class="round-tag">DE CODEZ</h4>
                    <p>Paired participants engage in a word puzzle activity related to their chosen topic and are
                        allotted 10 minutes to complete it. Upon completion, they receive question papers on the
                        same topic presented with answer options in a seven segmented display format, with prior
                        instruction provided to participants. Subsequently, answers are recorded on provided answer
                        sheets.</p>
                </div>

                <button class="accordion">EVENT RULES</button>
                <div class="panel">
                    <p>
                    <ul>
                        <li>Once the topics are chosen it cannot be changed for the second part.</li>
                        <li>Participants are not allowed to discuss with the other team members.</li>
                        <li>Participants should strictly adhere to the time limit.</li>
                        <li>Participants are strictly prohibited from using the internet</li>
                        <li>Participants are advised not to indulge in any form of malpractice.</li>
                        <li>The decision of the conveners and the volunteers will stand final in the matter of the
                            winner list.</li>
                    </ul>
                    <h5>TEAM SIZE</h5>
                    2 Participants<br>
                    </p>
                </div>

                <button class="accordion">Date</button>
                <div class="panel">
                    <h2 class="date">28/03/23</h2>
                    <h4 class="day">Tuesday</h4>
                </div>
                <button class="accordion">contact</button>
                <div class="panel">
                    <p>

                    <ul style="list-style-type: none;">
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+919487725841">MOHAMED FAZIL RAZAQ S - 9487725841</a></li>
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+918072846572">DINESH KRISHNA B - 8072846572</a></li>
                    </ul><br>

                    </p>
                </div>
                <button class="btn-7" id="btn_2"><span>Register</span></button>

            </div>
        </div>
    </div>
    <div id="id03" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-card-4 " style="border-radius: 2rem; padding: 0px 15px 15px 15px; position: relative;text-align: center;">
            <header class="w3-container w3" style="border-radius: 0 0 2rem 2rem; background-color: rgba(255, 255, 255, 0);">
                <div class="close-container" onclick="document.getElementById('id03').style.display='none'">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                    <label class="close">close</label>
                </div>
            </header>
            <div class="w3-container">
                <h2 class="modal-event-name">TECHTONIC</h2>
                <button class="accordion">Description</button>
                <div class="panel">
                    <p>A technical event that tests the knowledge of students in current technological fields through a
                        series of fun and competitive events that not only require the students to have technical
                        knowledge but also need them to be good at knowing new gadgets and their functional parts,
                        inventions and inventors, current market trends in tech world and adapt to handle the
                        various challenges they will have to face in the different rounds. </p>

                    <h2 class="round">Round 1</h2>
                    <h4 class="round-tag">PUZZTRONS</h4>
                    <p>
                        Teams start the round by solving a challenging STAR question collaboratively. Each team member
                        receives two sets of questions to solve independently, and they must then work together to fill
                        the answers in cross word puzzle. This round tests individual and teamwork skills, making it a
                        great opportunity to showcase your ailities!
                    </p>
                    <h2 class="round">Round 2</h2>
                    <h4 class="round-tag">NYPHONICS</h4>
                    <p>Put your knowledge and strategic decision-making skills to the test in this competitive
                        round! Each team starts with 1000 points and can bid on the answers they believe are
                        correct. It's a thrilling twist that requires careful consideration of options. Can you make
                        smart decisions and earn the most points to become the ultimate winner? Join us and find
                        out!</p>
                </div>

                <button class="accordion">EVENT RULES</button>
                <div class="panel">
                    <p>
                    <ul>
                        <li>Participants should strictly adhere to the time limit.</li>
                        <li>Participants are strictly prohibited from using calculators and mobile phones to find
                            the answer.</li>
                        <li>Participants are advised not to indulge in any form of malpractice.</li>
                        <li>The decision of the convenors will stand final in the matter of the winner list.</li>
                    </ul>
                    <h5>TEAM SIZE</h5>
                    2 Participants<br>
                    </p>
                </div>

                <button class="accordion">Date</button>
                <div class="panel">
                    <h2 class="date">31/03/23</h2>
                    <h4 class="day">Friday</h4>
                </div>
                <button class="accordion">contact</button>
                <div class="panel">
                    <p>

                    <ul style="list-style-type: none;">
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+918248310070">MANEESH V - 8248310070</a></li>
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+919361326169">Shirin Shiffra J - 9361326169</a></li>
                    </ul><br>

                    </p>
                </div>
                <button class="btn-7" id="btn_3"><span>Register</span></button>

            </div>
        </div>
    </div>
    <div id="id04" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-card-4 " style="border-radius: 2rem; padding: 0px 15px 15px 15px; position: relative;text-align: center;">
            <header class="w3-container w3" style="border-radius: 0 0 2rem 2rem; background-color: rgba(255, 255, 255, 0);">
                <div class="close-container" onclick="document.getElementById('id04').style.display='none'">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                    <label class="close">close</label>
                </div>
            </header>
            <div class="w3-container">
                <h2 class="modal-event-name">TECHIPEDIA</h2>
                <button class="accordion">Description</button>
                <div class="panel">
                    <p>This event aims to bring out the inquisitiveness, problem-solving skills, and spontaneity of
                        the participants by challenging them with questions from the basics of Physics, Mathematics,
                        and coding.</p>
                    <h2 class="round">Round 1</h2>
                    <h4 class="round-tag">TECH-TREASURE</h4>
                    <p>
                        Are you good with bows and arrows? Come hunt for the treasure with the hints provided. The
                        sooner you find the treasure the longer you will have to secure a lead over your rival teams
                        by answering as many questions as you can from a pool of over 60!
                    </p>
                    <h2 class="round">Round 2</h2>
                    <h4 class="round-tag">JUST A MINUTE</h4>
                    <p>In this round, participants must demonstrate their technical knowledge by speaking about a
                        given topic for two minutes. If you want an advantage over your competitors, complete a
                        mystery task to earn extra preparation time. The duration of the extra time depends on the
                        number of points you earn in the tap-and-fill game, where you must bounce a ball into a cup
                        of water. The prizes will be awarded based on the quality and efficiency of your
                        presentation.</p>
                </div>

                <button class="accordion">EVENT RULES</button>
                <div class="panel">
                    <p>
                    <ul>
                        <li>Participants must strictly adhere to the time limit of both rounds.</li>
                        <li>Participants are not advised to indulge in any form of malpractice.</li>
                        <li>Participants are prohibited from looking for answers on the internet.</li>
                    </ul>
                    <h5>TEAM SIZE</h5>
                    2 PARTICIPANTS
                    </p>
                </div>

                <button class="accordion">Date</button>
                <div class="panel">
                    <h2 class="date">28/03/23</h2>
                    <h4 class="day">Tuesday</h4>
                </div>
                <button class="accordion">contact</button>
                <div class="panel">
                    <p>

                    <ul style="list-style-type: none;">
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+919345899464">Cibikshavadanaa AG - 9345899464</a></li>
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+919363459759">Brindha D - 9363459759</a></li>
                    </ul><br>

                    </p>
                </div>
                <button class="btn-7" id="btn_4"><span>Register</span></button>

            </div>
        </div>
    </div>
    <div id="id05" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-card-4 " style="border-radius: 2rem; padding: 0px 15px 15px 15px; position: relative;text-align: center;">
            <header class="w3-container w3" style="border-radius: 0 0 2rem 2rem; background-color: rgba(255, 255, 255, 0);">
                <div class="close-container" onclick="document.getElementById('id05').style.display='none'">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                    <label class="close">close</label>
                </div>
            </header>
            <div class="w3-container">
                <h2 class="modal-event-name">TECHNOPHILE</h2>
                <button class="accordion">Description</button>
                <div class="panel">
                    <p>A technical event that tests the student’s knowledge on basic concepts of mathematics,
                        physics and electrical domains.It consists of rounds filled with questions testing the
                        various aspects of circuit building skills and their familiarity with popular and basic
                        circuit design.</p>
                    <h2 class="round">Round 1</h2>
                    <h4 class="round-tag">BLANK IN A BLANK</h4>
                    <p>
                        The teams will be given 15 fill in the blank questions with clues.
                        The number of blanks will be the same as the number of letters of the answer.
                        A bonus question will also be given which should be solved using the answers of the above
                        questions such that each letter of the bonus word is highlighted in each letter of
                        identified answer.
                    </p>
                    <h2 class="round">Round 2</h2>
                    <h4 class="round-tag">CIRCUINNOVATE</h4>
                    <p> In this round each team will be given 1 circuit which they have to identify based on the
                        given 5 clues.Then the teams can roll a die to get an additional clue which is based on the
                        framework of the circuit. One of the team members has to prepare a speech for 2 minutes
                        describing the working, merits and demerits of the circuit.
                        The teams will be evaluated based on the design of the circuit, speech and identification of
                        the circuit
                    </p>
                </div>

                <button class="accordion">EVENT RULES</button>
                <div class="panel">
                    <p>
                    <ul>
                        <li>Participants should strictly adhere to the time limit.</li>
                        <li>Participants are strictly prohibited from using the internet</li>
                        <li>Participants are advised not to indulge in any form of malpractice.</li>
                        <li>The decision of the conveners and the volunteers will stand final in the matter of the
                            winner's list.</li>
                    </ul>
                    <h4>TEAM SIZE</h4>
                    2 PARTICIPANT
                    </p>
                </div>

                <button class="accordion">Date</button>
                <div class="panel">
                    <h2 class="date">27/03/23</h2>
                    <h4 class="day">Monday</h4>
                </div>
                <button class="accordion">contact</button>
                <div class="panel">
                    <p>

                    <ul style="list-style-type: none;">
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+919894244150">ATHISH S A - 9894244150</a></li>
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+917539960648">RITHIKA VK - 7539960648</a></li>
                    </ul><br>

                    </p>
                </div>
                <button class="btn-7" id="btn_5"><span>Register</span></button>

            </div>
        </div>
    </div>
    <div id="id06" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-card-4 " style="border-radius: 2rem; padding: 0px 15px 15px 15px; position: relative;text-align: center;">
            <header class="w3-container w3" style="border-radius: 0 0 2rem 2rem; background-color: rgba(255, 255, 255, 0);">
                <div class="close-container" onclick="document.getElementById('id06').style.display='none'">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                    <label class="close">close</label>
                </div>
            </header>
            <div class="w3-container">
                <h2 class="modal-event-name">TECHNOFRENZY</h2>
                <button class="accordion">Description</button>
                <div class="panel">
                    <p>The event consists of two rounds where the first round tests one’s knowledge in various
                        aspects of basics in Engineering.
                        The selected participants will be given 3 tasks which they have to perform consecutively in
                        the second round.
                    </p>
                    <h2 class="round">Round 1</h2>
                    <h4 class="round-tag">QUIZ BUCKERS</h4>
                    <p>
                        This is a quiz-based round where participants will be asked to solve 20 questions which they
                        will pick from 5 different boxes of a varied domain. Each participant will be allowed to
                        select only one question set from each box. Based on the number of right answers and the
                        time taken to solve the questions, participants will be selected to the next round.
                    </p>
                    <h2 class="round">Round 2</h2>
                    <h4 class="round-tag">TECKETO</h4>
                    <p>In this round a set of three tasks will be given.
                        The participant has to blow a balloon and burst it,in order to know the task kept in the
                        balloon. The participant has to perform the set of tasks given to them one by one.
                    </p>
                </div>

                <button class="accordion">EVENT RULES</button>
                <div class="panel">
                    <p>
                    <ul>
                        <li>Participants should strictly adhere to the time limit.</li>
                        <li>Participants are strictly prohibited from using the internet</li>
                        <li>The decision of the conveners and the volunteers will stand final</li>
                        <li>Participants are advised not to indulge in any form of malpractice.</li>
                    </ul>
                    <h5>TEAM SIZE</h5>
                    2 Participants<br>
                    </p>
                </div>

                <button class="accordion">Date</button>
                <div class="panel">
                    <h2 class="date">30/03/23</h2>
                    <h4 class="day">Thursday</h4>
                </div>
                <button class="accordion">contact</button>
                <div class="panel">
                    <p>

                    <ul style="list-style-type: none;">
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+917339061929">SANKAR HARIHARAN G - 7339061929
                            </a></li>
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+918122301790">KARTHIK K - 8122301790</a></li>
                    </ul><br>

                    </p>
                </div>
                <button class="btn-7" id="btn_6"><span>Register</span></button>

            </div>
        </div>
    </div>

    <div id="id07" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-card-4 " style="border-radius: 2rem; padding: 0px 15px 15px 15px; position: relative;text-align: center;">
            <header class="w3-container w3" style="border-radius: 0 0 2rem 2rem; background-color: rgba(255, 255, 255, 0);">
                <div class="close-container" onclick="document.getElementById('id07').style.display='none'">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                    <label class="close">close</label>
                </div>
            </header>
            <div class="w3-container">
                <h2 class="modal-event-name">THE LOST FORTUNE </h2>
                <button class="accordion">Description</button>
                <div class="panel">
                    <p>This event consists of two fun filled rounds. The first round is to explore three islands
                        by completing three different games. Then the participants compete to achieve the treasure
                        by playing snake and ladder game in the second round.</p>
                    <h2 class="round">Round 1</h2>
                    <h4 class="round-tag">EXPLORER DI EILAND</h4>
                    <p>
                        Get across the islands by completing bitsy games. Cross word, connection and aptitude will
                        bridge you. In the first island, teams will be playing crossword puzzle. In the second
                        island teams will be given with connection, and in the third island teams will be given with
                        aptitude questions.
                    </p>
                    <h2 class="round">Round 2</h2>
                    <h4 class="round-tag">TRESOR SCOUT</h4>
                    <p>Roll four-sided dice to rise and win prize. Cruise the snakes and ladders to embrace it. Each
                        team will have two members both can answer the question by clicking the buzzer and one
                        member will be rolling the dice and other member will be playing the snake and ladder game.
                        The first team to reach the treasure in the final box will be the winner.</p>
                </div>

                <button class="accordion">EVENT RULES</button>
                <div class="panel">
                    <p>
                    <ul>
                        <li>Participants are not allowed to use their mobile phones.</li>
                        <li>Each team should have only 2 members.</li>
                        <li>Any team found involved in malpractice will be eliminated.</li>
                    </ul>
                    <h5>TEAM SIZE</h5>
                    2 PARTICIPANTS
                    </p>
                </div>

                <button class="accordion">Date</button>
                <div class="panel">
                    <h2 class="date">31/03/23</h2>
                    <h4 class="day">Friday</h4>
                </div>
                <button class="accordion">contact</button>
                <div class="panel">
                    <p>

                    <ul style="list-style-type: none;">
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+919360376605">PRAVEEN T - 9360376605</a></li>
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+919940768507">PRETHIKAA S - 9940768507</a></li>
                    </ul><br>

                    </p>
                </div>
                <button class="btn-7" id="btn_7"><span>Register</span></button>

            </div>
        </div>
    </div>
    <div id="id08" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-card-4 " style="border-radius: 2rem; padding: 0px 15px 15px 15px; position: relative;text-align: center;">
            <header class="w3-container w3" style="border-radius: 0 0 2rem 2rem; background-color: rgba(255, 255, 255, 0);">
                <div class="close-container" onclick="document.getElementById('id08').style.display='none'">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                    <label class="close">close</label>
                </div>
            </header>
            <div class="w3-container">
                <h2 class="modal-event-name">MATTER MIND</h2>
                <button class="accordion">Description</button>
                <div class="panel">
                    <p>This is a non-technical event with a plot to test the skills of participants in the areas of
                        math knowledge, aptitude, logical reasoning with unraveling clues to find solutions. The
                        deserving ones will be selected and tested on the skills which involve solving questions and
                        intriguing puzzles with nail biting connections. </p>
                    <h2 class="round">Round 1</h2>
                    <h4 class="round-tag">HEXACON</h4>
                    <p>
                        Round 1 is based on logical thinking and math problems. Each team will be provided with 15
                        equations. On solving these equations, you will get a one- or two-digits numbers and it
                        should be converted into Hexadecimal. On converting these numbers, you will get a certain
                        alphabet letter. On combining these letters, you will get a treasure word. The teams that
                        find the treasure word before the time will be selected for the next round.
                    </p>
                    <h2 class="round">Round 2</h2>
                    <h4 class="round-tag">TRIVIA</h4>
                    <p><strong>Phase 1:</strong> Each team will be asked 25 questions via projection, every team
                        must answer all the questions the four teams that answers most of the questions correctly
                        will get the chance to go to the next phase of the game.<br>
                        <strong>Phase 2:</strong> On this phase, the shortlisted teams will be given four stories
                        which is present in 4 different bowls. In order to win the game, the teams must arrange the
                        given set of story sheets and make a story line. These story sheets are shuffled before,
                        then the teams must arrange it in a right way.
                    </p>
                </div>

                <button class="accordion">EVENT RULES</button>
                <div class="panel">
                    <p>
                    <ul>
                        <li>The decision of the conveners and the volunteers will stand final in the matter of the
                            winners list. </li>
                        <li>Participants should strictly adhere to the time limit</li>
                    </ul>
                    <h5>TEAM SIZE</h5>
                    2 PARTICIPANTS
                    </p>
                </div>

                <button class="accordion">Date</button>
                <div class="panel">
                    <h2 class="date">28/03/23</h2>
                    <h4 class="day"> Tuesday</h4>
                </div>
                <button class="accordion">contact</button>
                <div class="panel">
                    <p>

                    <ul style="list-style-type: none;">
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+918667644541">RAGHUL T - 8667644541</a></li>
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+917305865699">SRIDEVI@KAVYA N - 7305865699</a></li>
                    </ul><br>

                    </p>
                </div>
                <button class="btn-7" id="btn_8"><span>Register</span></button>

            </div>
        </div>
    </div>



    </div>
    <div id="id09" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-card-4 " style="border-radius: 2rem; padding: 0px 15px 15px 15px; position: relative;text-align: center;">
            <header class="w3-container w3" style="border-radius: 0 0 2rem 2rem; background-color: rgba(255, 255, 255, 0);">
                <div class="close-container" onclick="document.getElementById('id09').style.display='none'">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                    <label class="close">close</label>
                </div>
            </header>
            <div class="w3-container">
                <h2 class="modal-event-name">FINDING FELONY</h2>
                <button class="accordion">Description</button>
                <div class="panel">
                    <p>Get yourself ready to experience the fun. Are you a quicky thinker? Here is an amazing opportunity
                        to bring up your investigating skill. Round one will be a bingo challenge, strike out the bingo
                        to crack it. Round two will be a crime based round with some exciting tasks. Take risk
                        and challenge yourself. Criminal investigation is right on the way. Wanna experience it? Be a part
                        in the amazing event finding felony, there are tons of exciting challenges that will bring glee
                        to you.</p>
                    <h2 class="round">Round 1</h2>
                    <h4 class="round-tag">JIGYASA</h4>
                    <p>
                        In this round the participants will be given with a set of 25 questions. They are asked to
                        answer those questions. They will also be provided with a bingo box with random number in which
                        they want to strike out the answered question numbers and hit the bingo. The teams which hit
                        bingo with the correct answers will win this round.
                    </p>
                    <h2 class="round">Round 2</h2>
                    <h4 class="round-tag">CLANDESTINE</h4>
                    <p>In this round participants will be displayed with a crime scene through the projector. A series
                        of Crime scenes will be splitted into number of pieces. Participants will be provided with some
                        tasks or questions. Advantages are provided to the participants who answers the questions
                        correctly. The team which finds out the maximum number of crime scenes will be the winner. </p>
                </div>

                <button class="accordion">EVENT RULES</button>
                <div class="panel">
                    <p>
                    <ul>
                        <li>The decision of the conveners and the volunteers will stand final in the matter of the
                            winner list.
                        </li>
                        <li>Usage of mobile phones are strictly prohibited</li>
                    </ul>
                    <h5>TEAM SIZE</h5>
                    2 PARTICIPANTS
                    </p>
                </div>

                <button class="accordion">Date</button>
                <div class="panel">
                    <h2 class="date">29/03/23</h2>
                    <h4 class="day">Tuesday</h4>
                </div>
                <button class="accordion">contact</button>
                <div class="panel">
                    <p>

                    <ul style="list-style-type: none;">
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+919965123409">NIRMAL KUMAR I - 9965123409</a></li>
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+917200696604">SAKTHISREE S - 7200696604</a></li>
                    </ul><br>

                    </p>
                </div>
                <button class="btn-7" id="btn_9"><span>Register</span></button>

            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div id="id010" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-card-4 " style="border-radius: 2rem; padding: 0px 15px 15px 15px; position: relative;text-align: center;">
            <header class="w3-container w3" style="border-radius: 0 0 2rem 2rem; background-color: rgba(255, 255, 255, 0);">
                <div class="close-container" onclick="document.getElementById('id010').style.display='none'">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                    <label class="close">close</label>
                </div>
            </header>
            <div class="w3-container">
                <h2 class="modal-event-name">SYNERGY</h2>
                <button class="accordion">Description</button>
                <div class="panel">
                    <p>This event centers around TV shows and general knowledge and aims to enhance cognitive abilities
                        through a diverse set of questions. Those who demonstrate proficiency will be assessed
                        accordingly.</p>
                    <h2 class="round">Round 1</h2>
                    <h4 class="round-tag">Guess and Move!</h4>
                    <p>
                        Join us for a thrilling team challenge! Test your knowledge of fictional and non-fictional
                        characters by guessing their names based on indirect hints. The team with the most correct
                        guesses in two minutes moves on to round two.

                    </p>
                    <h2 class="round">Round 2</h2>
                    <h4 class="round-tag">Enigma - X</h4>
                    <p>The Treasure hunt of this round is based on web series. Participating teams will first select
                        their theme, based on which each team sets out on a uniquely crafted journey. Do you have what
                        it takes to solve the mysteries and complete the hunt before your rivals?
                    </p>
                </div>

                <button class="accordion">EVENT RULES</button>
                <div class="panel">
                    <p>
                    <ul>
                        <li>Team members should not talk with members of other teams or share questions.</li>
                        <li>Any team found involved in malpractice will be eliminated.</li>
                        <!-- <li>Participants are prohibited from looking for answers on the internet.</li> -->
                    </ul>
                    <h5>TEAM SIZE</h5>
                    2 PARTICIPANTS
                    </p>
                </div>

                <button class="accordion">Date</button>
                <div class="panel">
                    <h2 class="date">29/03/23</h2>
                    <h4 class="day">Wednesday</h4>
                </div>
                <button class="accordion">contact</button>
                <div class="panel">
                    <p>

                    <ul style="list-style-type: none;">
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+918190879953">DHIKSHA D I - 8190879953 </a></li>
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+918838945588">SWASTIKA R - 8838945588 </a></li>
                    </ul><br>
                    </p>
                </div>
                <button class="btn-7" id="btn_10"><span>Register</span></button>

            </div>
        </div>
    </div>
    <div id="id011" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-card-4 " style="border-radius: 2rem; padding: 0px 15px 15px 15px; position: relative;text-align: center;">
            <header class="w3-container w3" style="border-radius: 0 0 2rem 2rem; background-color: rgba(255, 255, 255, 0);">
                <div class="close-container" onclick="document.getElementById('id011').style.display='none'">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                    <label class="close">close</label>
                </div>
            </header>
            <div class="w3-container">
                <h2 class="modal-event-name">FUNTASTIC TRIVIA</h2>
                <button class="accordion">Description</button>
                <div class="panel">
                    <p>Get ready for a thrilling ride with two exciting rounds of fun and logic! To qualify for the next
                        stage, you'll need to put your thinking cap on and beat the clock.</p>
                    <h2 class="round">Round 1</h2>
                    <h4 class="round-tag">SMARTY PINTS</h4>
                    <p>
                        Get ready for a mind-bending challenge that tests your problem-solving skills, sports knowledge,
                        and mental acuity. The teams that can solve the puzzles and riddles the quickest and with the
                        most accuracy will earn a spot in the next round.
                    </p>
                    <h2 class="round">Round 2</h2>
                    <h4 class="round-tag">MIND GAME COMPILATION</h4>
                    <p>The teams will face a triple challenge: first, they must solve a problem, then construct a story,
                        and finally, uncover a hidden fact. Their success in each task will determine the ultimate
                        victors.</p>
                </div>

                <button class="accordion">EVENT RULES</button>
                <div class="panel">
                    <p>
                    <ul>
                        <li>Discussion with other teams is strictly prohibited.</li>
                        <li>Usage of mobile phones is restricted in the first round.</li>
                        <li>The decision of conveners and the volunteers will stand final in the matter of the winner
                            list.</li>
                    </ul>
                    <h5>TEAM SIZE</h5>
                    2 PARTICIPANTS
                    </p>
                </div>

                <button class="accordion">Date</button>
                <div class="panel">
                    <h2 class="date">27/03/23</h2>
                    <h4 class="day">Monday</h4>
                </div>
                <button class="accordion">contact</button>
                <div class="panel">
                    <p>

                    <ul style="list-style-type: none;">
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+917200052823">ASWIN C - 7200052823
                            </a></li>
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+916382235779">VARSHINI J S - 6382235779
                            </a></li>
                    </ul><br>

                    </p>
                </div>
                <button class="btn-7" id="btn_11"><span>Register</span></button>

            </div>
        </div>
    </div>
    </div>
    <div id="id012" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-card-4 " style="border-radius: 2rem; padding: 0px 15px 15px 15px; position: relative;text-align: center;">
            <header class="w3-container w3" style="border-radius: 0 0 2rem 2rem; background-color: rgba(255, 255, 255, 0);">
                <div class="close-container" onclick="document.getElementById('id012').style.display='none'">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                    <label class="close">close</label>
                </div>
            </header>
            <div class="w3-container">
                <h2 class="modal-event-name">FANTASTIC FRIDAZE</h2>
                <button class="accordion">Description</button>
                <div class="panel">
                    <p>Are you a quicky thinker? Then this will be an event for you. There are tons of exciting
                        challenges that will bring glee to you. Sharpen your observation skills with picture-based questions. Work with your partner in a
                        blindfolded maze challenge to build trust and navigate to victory as a team. Get ready to experience the fun!
                    </p>
                    <h2 class="round">Round 1</h2>
                    <h4 class="round-tag">MIND SWEEPER</h4>
                    <p>
                        The first round is based on pen & paper. In each team there will be around two members. The
                        picture will be presented on the PPT. The participants should observe the picture for 10
                        seconds, after that they will be asked questions from the picture displayed. They should answer
                        it in the A4 sheet provided. This round will test their observation skills. The teams will be
                        selected based on the marks obtained by them.
                    </p>
                    <h2 class="round">Round 2</h2>
                    <h4 class="round-tag">MAZE RUNNER</h4>
                    <p>In this round, from each team one student will be blind-folded and the other student will give
                        the instructions to that person to reach the end point. In a closed room, each teams will have
                        their own paths marked with different colors.In-between the paths there will be some activities
                        for the teams to perform.Once the blind-folded person reaches the end point their team will be
                        given a clue which will be a clue for a particular location of our college campus. The team
                        members should reach the location correctly with the help of the clues given. The first two
                        teams who finished the maze and reached the right location will be the winners and runners
                        respectively.</p>
                </div>

                <button class="accordion">EVENT RULES</button>
                <div class="panel">
                    <p>
                    <ul>
                        <li>Use of mobile phones is strictly prohibited. </li>
                        <li>No discussion between the teams during the event. </li>
                    </ul>
                    <h5>TEAM SIZE</h5>
                    2 PARTICIPANTS
                    </p>
                </div>

                <button class="accordion">Date</button>
                <div class="panel">
                    <h2 class="date">30/03/23</h2>
                    <h4 class="day">Thursday</h4>
                </div>
                <button class="accordion">contact</button>
                <div class="panel">
                    <p>

                    <ul style="list-style-type: none;">
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+918778691081">MITHLESH JR - 8778691081</a></li>
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+919444527945"> PREM KUMAR R - 9444527945</a></li>
                    </ul><br>

                    </p>
                </div>
                <button class="btn-7" id="btn_12"><span>Register</span></button>

            </div>
        </div>
    </div>
    <div id="id013" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-card-4 " style="border-radius: 2rem; padding: 0px 15px 15px 15px; position: relative;text-align: center;">
            <header class="w3-container w3" style="border-radius: 0 0 2rem 2rem; background-color: rgba(255, 255, 255, 0);">
                <div class="close-container" onclick="document.getElementById('id013').style.display='none'">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                    <label class="close">close</label>
                </div>
            </header>
            <div class="w3-container">
                <h2 class="modal-event-name">RETRO CRICKET AUCTION</h2>
                <button class="accordion">Description</button>
                <div class="panel">
                    <p>Passion and cricket come together at the Cricket auction. Get ready for an adrenaline rush and
                        elevate your cricketing gameplay!
                    </p>
                    <h2 class="round">Round 1</h2>
                    <h4 class="round-tag">QUIZ</h4>
                    <p>
                        Unleash your cricketing potential. Test your knowledge on cricketing gameplay by answering
                        mind-boggling MCQs.
                    </p>
                    <h2 class="round">Round 2</h2>
                    <h4 class="round-tag">RETRO CRICKET AUCTION</h4>
                    <p>Craft a cricketing legacy with the right cricket auction picks! The selected 10 teams, choose the
                        right players and bid to win the trophy. Get the players that can make your cricket auction a
                        massive success.</p>
                </div>

                <button class="accordion">EVENT RULES</button>
                <div class="panel">
                    <p>
                    <ul>
                        <li>Phones are not allowed.</li>
                        <li>Participants are not allowed to discuss with the other team</li>
                        <li>Players list will be provided for each team.</li>
                        <li>Each team will be provided certain amount of money to bid the players.</li>
                        <li>Each team should bid the players with their own purse amount.</li>
                        <li>No of players to be bid ( Indian and overseas players) list will be provided.</li>
                        <li>Once the player is sold to one particular team, then that team cannot release the player.
                        </li>
                    </ul>
                    <h5>TEAM SIZE</h5>
                    4 PARTICIPANTS
                    </p>
                </div>

                <button class="accordion">Date</button>
                <div class="panel">
                    <h2 class="date">31/03/23</h2>
                    <h4 class="day">Friday</h4>
                </div>
                <button class="accordion">contact</button>
                <div class="panel">
                    <p>

                    <ul style="list-style-type: none;">
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+919150353454">VIVEK S - 9150353454</a></li>
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+919677088436">ARUN MURUGAN G - 9677088436</a></li>
                    </ul><br>

                    </p>
                </div>
                <button class="btn-7" id="btn_13"><span>Register</span></button>

            </div>
        </div>
    </div>
    <div id="id014" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-card-4 " style="border-radius: 2rem; padding: 0px 15px 15px 15px; position: relative;text-align: center;">
            <header class="w3-container w3" style="border-radius: 0 0 2rem 2rem; background-color: rgba(255, 255, 255, 0);">
                <div class="close-container" onclick="document.getElementById('id014').style.display='none'">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                    <label class="close">close</label>
                </div>
            </header>
            <div class="w3-container">
                <h2 class="modal-event-name">ATOMOTECH</h2>
                <button class="accordion">Description</button>
                <div class="panel">
                    <p>ATOMOTECH is a exhibit where you can showcase your projects. There are two categories 'Hardware' and 'Software'. Some examples of the hardware projects are Embedded system, Iot, Microcontroller
                        etc., Some examples of the software projects are Android task monitoring, Bug Tracker, Weather
                        Forecasting System etc., Each category comprises two rounds: In the first round, the
                        participants (in teams of two to four) should submit an abstract explaining about their project.
                        The second round requires the participants to demonstrate their project according to their
                        category. The event aims to help you improve your competency but also give you a platform to
                        execute your ideas.
                    </p>
                    <h2 class="round">Round 1</h2>
                    <!-- <h4 class="round-tag">QUIZ</h4> -->
                    <p>
                    <ul>
                        <li>Participants can compete as a team of (2-4) and do a project based on any recent research
                            area related to engineering.</li>
                        <li> Each team has to send us a abstract as a single pdf (not exceeding 300 words) of
                            their project within the deadline.</li>
                        <li>The abstract should be in IEEE format. Please enclose details of the team members (Full
                            Name, Department, Year of Study, Email ID and Contact Number - preferably WhatsApp Number).
                        </li>
                        <li>The abstract should be submitted on or before 29/03/23 via email to <a style="text-decoration: none;" href="mailto:Atomotech2k23@gmail.com" onMouseOver="this.style.color='#ffd6d6'" onMouseOut="this.style.color='#ffd6d6'">"Atomotech2k23@gmail.com"</a>
                        </li>
                        <li>Make sure the name of the files submitted and the subject of the email correspond to the
                            title of the project chosen.</li>
                    </ul>
                    </p>
                    <h2 class="round">Round 2</h2>
                    <!-- <h4 class="round-tag">RETRO CRICKET AUCTION</h4> -->
                    <p>The selected teams have to pay a amount of Rs.200 per team and exhibit their working model based
                        on their chosen domain. The participants have to submit a hardcopy of the report on the day of
                        the event. The report should be in IEEE format. The working is mandatory. Each team will be
                        questioned about their project by the judges. The winners and runners are selected from each
                        domain.</p>
                </div>

                <button class="accordion">EVENT RULES</button>
                <div class="panel">
                    <p>
                    <ul>
                        <li>Each team can have a maximum of 4 members and a minimum of 2 members.</li>
                        <li>Any one member from the team is enough to register.</li>
                        <li>The participants are expected to stick with the word limits.</li>
                        <li>Project done should not be an imitation of someone else’s work. Plagiarism of work or
                            documentation is not encouraged.</li>
                        <li>There are no restrictions in forming the teams (say participants of different departments
                            are allowed to participate as a team). A team member can only partake in one project
                            presentation.</li>
                        <li>All teams are expected to submit a hardware model.</li>
                        <li>Abstracts sent after the deadline will not be taken into consideration.</li>
                    </ul>
                </div>

                <button class="accordion">Date</button>
                <div class="panel">
                    <h2 class="date">01/04/23</h2>
                    <h4 class="day">Saturday</h4>
                </div>
                <button class="accordion">contact</button>
                <div class="panel">
                    <p>

                    <ul style="list-style-type: none;">
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+918667634903">DHARSAN R 8667634903</a></li>
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+91 75488 76684">SABAREESAN R 75488 76684</a></li>
                    </ul><br>

                    </p>
                </div>
                <button class="btn-7" id="btn_14"><span>Register</span></button>

            </div>
        </div>
    </div>


    <div id="id015" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-card-4 " style="border-radius: 2rem; padding: 0px 15px 15px 15px; position: relative;text-align: center;">
            <header class="w3-container w3" style="border-radius: 0 0 2rem 2rem; background-color: rgba(255, 255, 255, 0);">
                <div class="close-container" onclick="document.getElementById('id015').style.display='none'">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                    <label class="close">close</label>
                </div>
            </header>
            <div class="w3-container">
                <h2 class="modal-event-name">SMART ROVER USING IOT</h2>
                <button class="accordion">WORKSHOP DESCRIPTION</button>
                <div class="panel">
                    <p>If you think that the internet has changed your life, think again. The Internet of Things is
                        about to change it all over again! Participants will be educated in the topic with 4 modules :
                        career opportunities in embedded system and IoT, designing rover with requirement analysis and
                        designing hands on hardware circuit, hands on rover control with embedded c program,
                        communication and control protocols of IoT.
                    </p>
                    <p>
                    <h5>RESOURCE PERSON: A speaker from <strong>MANFREE TECHNOLOGIES</strong></h5>
                    <h4 class="round">REGISTRATION FEE</h4>
                    <center>
                        <h5>Rs.300</h5>
                    </center>
                    </p>

                </div>

                <button class="accordion">PREREQUISITE</button>
                <div class="panel">

                    <p>
                    <ul>
                        <li> Individual laptop along with any of the software applications-Mplab IDE, Proteus or
                            EasyEDA.</li>
                    </ul>
                    </p>
                </div>

                <button class="accordion">Date</button>
                <div class="panel">
                    <h2 class="date">01/04/23</h2>
                    <h4 class="day">Saturday</h4>
                </div>
                <button class="accordion">contact</button>
                <div class="panel">
                    <p>

                    <ul style="list-style-type: none;">
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+919384660021">HARIHARAN D - 9384660021</a></li>
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+919080424132">ANUSRI P - 9080424132</a></li>
                    </ul><br>

                    </p>
                </div>
                <button class="btn-7" id="btn_15"><span>Register</span></button>
            </div>
        </div>
    </div>
    <div id="id016" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-card-4 " style="border-radius: 2rem; padding: 0px 15px 15px 15px; position: relative;text-align: center;">
            <header class="w3-container w3" style="border-radius: 0 0 2rem 2rem; background-color: rgba(255, 255, 255, 0);">
                <div class="close-container" onclick="document.getElementById('id016').style.display='none'">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                    <label class="close">close</label>
                </div>
            </header>
            <div class="w3-container">
                <h2 class="modal-event-name">CLOUD COMPUTING</h2>
                <button class="accordion">WORKSHOP DESCRIPTION</button>
                <div class="panel">
                    <p>In this intensive one-day workshop, you'll dive into the nitty-gritty of Cloud Computing and
                        gain the practical skills needed to harness its full potential, from setting up virtual
                        machines and containers to deploying and scaling applications in the cloud. Join us and
                        discover how to revolutionize your approach to computing!</p>
                    <p>
                    <h5>RESOURCE PERSON: MOHAMMAD ALI from <strong>UBIX TECHNOLOGIES</strong></h5>
                    <h2 class="round">REGISTRATION FEE</h2>
                    <center>
                        <h5>Rs.250</h5>
                    </center>
                    </p>
                </div>

                <button class="accordion">PREREQUISITE</button>
                <div class="panel">
                    <p>Individual Laptop</p>
                </div>


                <button class="accordion">Date</button>
                <div class="panel">
                    <h2 class="date">01/04/23</h2>
                    <h5 class="day">Saturday</h5>
                </div>
                <button class="accordion">contact</button>
                <div class="panel">
                    <p>

                    <ul style="list-style-type: none;">
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+918667466930">ABINIVESH G A - 8667466930</a></li>
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+919488612886">SIDDHARTH V - 9488612886</a></li>
                    </ul><br>

                    </p>
                </div>
                <button class="btn-7" id="btn_16"><span>Register</span></button>

            </div>


        </div>
    </div>

    <div id="id017" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-card-4 " style="border-radius: 2rem; padding: 0px 15px 15px 15px; position: relative;text-align: center;">
            <header class="w3-container w3" style="border-radius: 0 0 2rem 2rem; background-color: rgba(255, 255, 255, 0);">
                <div class="close-container" onclick="document.getElementById('id017').style.display='none'">
                    <div class="leftright"></div>
                    <div class="rightleft"></div>
                    <label class="close">close</label>
                </div>
            </header>
            <div class="w3-container">
                <h2 class="modal-event-name">MISSING PIECES OF BUSINESS SAGA</h2>
                <button class="accordion">WORKSHOP DESCRIPTION</button>
                <div class="panel">
                    <p>The workshop is a 3 hours session presented by one of the inspiring speakers. This workshop will cover
                        the following topics:
                    <ul>
                        <li>Resume Building</li>
                        <li>Career opportunities</li>
                        <li>Financial management as a student</li>
                    </ul>
                    Students will have their resume ready in their hand at the end of the session with great exposure to
                    the reality in life after college and how to be financially balanced while studying.
                    </p><br>
                    <center>
                        <h5><strong>NO REGISTRATION FEE</strong></h5><br><br>
                    </center>
                    <h5>RESOURCE PERSON: GLADSON JOSHUA L</h5>

                </div>
                <button class="accordion">Date</button>
                <div class="panel">
                    <h2 class="date">01/04/23</h2>
                    <h4 class="day">Saturday</h4>
                </div>
                <button class="accordion">contact</button>
                <div class="panel">
                    <ul style="list-style-type: none;">
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+919597555927">VIMAL VK - 9597555927</a></li>
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;" href=" tel:+919442671132">AKSAYA KARTHIKA A - 9442671132</a></li>
                        <!-- <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;"
                                href=" tel:+91934589946">VAITHISWARI S - 7010086395</a></li>
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;"
                                href=" tel:+91934589946">ABIRAMI C - 8438554626</a></li>
                        <li><a style="color: #ffd6d6;text-transform: uppercase;text-decoration: none;"
                                href=" tel:+91934589946">MOHAMED SUHAIL M - 638536320</a></li> -->
                    </ul>
                    <br>
                    </p>
                </div>
                <button class="btn-7" id="btn_17"><span>Register</span></button>
            </div>
        </div>
    </div>




    <script>
        let glowInTexts = document.querySelectorAll(".para");
        glowInTexts.forEach(glowInText => {
            let letters = glowInText.textContent.split("");
            glowInText.textContent = "";
            letters.forEach((letter, i) => {
                let span = document.createElement("span");
                span.textContent = letter;
                span.style.animationDelay = `${i * 0.01 + 1.1}s`;
                glowInText.append(span);
            });
        });
    </script>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
    <!-- <script src="three.r134.min.js"></script>
    <script src="vanta.fog.min.js"></script> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r123/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanta/0.5.21/vanta.fog.min.js"></script>
    <script>
        VANTA.FOG({
            el: "#vantajs",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            highlightColor: 0x000000,
            // midtoneColor:0xfe8535,
            // lowlightColor:0xfdb10b,
            blurFactor: 0.48,
            speed: 0.50,
            zoom: 0.60
        });
    </script> -->

    <!-- <section>
        <footer class="footer">
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
        </footer>
    </section> -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
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
        window.open('login.php');
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