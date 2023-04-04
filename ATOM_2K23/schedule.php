<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome Icons-->
    <script src="https://kit.fontawesome.com/a74d0f3882.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="assets/css/schedule.css">
    <link rel="stylesheet" href="assets/css/nav.css">
    <link rel="stylesheet" href="assets/css/common-styles.css">



    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="assets/atom2k23.ico" rel="icon">
    <title>ATOM 2K23</title>
</head>

<style>
    @font-face {
        font-family: MonumentReg;
        src: url('assets/fonts/MonumentExtended-Regular.otf');
    }

    @font-face {
        font-family: FlareReg;
        src: url('assets/fonts/Flare-Regular.otf');
    }

    @font-face {
        font-family: AquireBold;
        src: url('assets/fonts/AquireBold.otf');
    }

    @font-face {
        font-family: Aquatico;
        src: url('assets/fonts/Aquatico-Regular.otf');
    }
</style>

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

    <div class="header">
        <h2>ATOM 2K23</h2>
    </div>
    <div class="page-title">
        <h4>Events Schedule</h4>
    </div>
    <center>
        <section class="cards">
            <div class="row">
                <div class="date">
                    <h2>27th March 2023</h2>
                </div>

                <div class="card" data-aos="zoom-in-left">
                    <div class="card__title">
                        TECHNOPHILE
                    </div>
                    <p class="card__content"><strong>Technical Event</strong>
                        <br>
                        <strong>Time:</strong> 4:30 PM to 7:00 PM
                    </p>

                    <a href="event.php">
                        <div class="card__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                                <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z">
                                </path>
                            </svg>
                        </div>
                    </a>
                </div>

                <div class="card" data-aos="zoom-in-left">
                    <div class="card__title">
                        FUNTASTIC TRIVIA
                    </div>
                    <p class="card__content"><strong>Non - Technical Event</strong>
                        <br>
                        <strong>Time:</strong> 4:30 PM to 7:00 PM
                    </p>

                    <a href="event.php">
                        <div class="card__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                                <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z">
                                </path>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="date">
                    <h2>28th March 2023</h2>
                </div>

                <div class="card" data-aos="zoom-in-left">
                    <div class="card__title">
                        TECHNOWIZ
                    </div>
                    <p class="card__content"><strong>Technical Event</strong>
                        <br>
                        <strong>Time:</strong> 4:30 PM to 7:00 PM
                    </p>

                    <a href="event.php">
                        <div class="card__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                                <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z">
                                </path>
                            </svg>
                        </div>
                    </a>
                </div>

                <div class="card" data-aos="zoom-in-left">
                    <div class="card__title">
                        TECHIPEDIA
                    </div>
                    <p class="card__content"><strong>Technical Event</strong>
                        <br>
                        <strong>Time:</strong> 4:30 PM to 7:00 PM
                    </p>

                    <a href="event.php">
                        <div class="card__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                                <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z">
                                </path>
                            </svg>
                        </div>
                    </a>
                </div>

                <div class="card" data-aos="zoom-in-left">
                    <div class="card__title">
                        FANTASTIC FRIDAZE
                    </div>
                    <p class="card__content"><strong>Non - Technical Event</strong>
                        <br>
                        <strong>Time:</strong> 4:30 PM to 7:00 PM
                    </p>

                    <a href="event.php">
                        <div class="card__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                                <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z">
                                </path>
                            </svg>
                        </div>
                    </a>
                </div>

            </div>

            <div class="row">
                <div class="date">
                    <h2>29th March 2023</h2>
                </div>

                <div class="card" data-aos="zoom-in-left">
                    <div class="card__title">
                        ELECTRIXPLORE
                    </div>
                    <p class="card__content"><strong>Technical Event</strong>
                        <br>
                        <strong>Time:</strong> 4:30 PM to 7:00 PM
                    </p>

                    <a href="event.php">
                        <div class="card__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                                <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z">
                                </path>
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="card" data-aos="zoom-in-left">
                    <div class="card__title">
                        FINDING FELONY
                    </div>
                    <p class="card__content"><strong>Non - Techical Event</strong>
                        <br>
                        <strong>Time:</strong> 4:30 PM to 7:00 PM
                    </p>

                    <a href="event.php">
                        <div class="card__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                                <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z">
                                </path>
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="card" data-aos="zoom-in-left">
                    <div class="card__title">
                        SYNERGY
                    </div>
                    <p class="card__content"><strong>Non - Technical Event</strong>
                        <br>
                        <strong>Time:</strong> 4:30 PM to 7:00 PM
                    </p>

                    <a href="event.php">
                        <div class="card__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                                <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z">
                                </path>
                            </svg>
                    </a>
                </div>
            </div>
            </div>

            <div class="row">
                <div class="date">
                    <h2>30th March 2023</h2>
                </div>
                <div class="card" data-aos="zoom-in-left">
                    <div class="card__title">
                        TECHNOFRENZY
                    </div>
                    <p class="card__content"><strong>Technical Event</strong>
                        <br>
                        <strong>Time:</strong> 4:30 PM to 7:00 PM
                    </p>

                    <a href="event.php">
                        <div class="card__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                                <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z">
                                </path>
                            </svg>
                    </a>
                </div>
            </div>

            <div class="card" data-aos="zoom-in-left">
                <div class="card__title">
                    MATTER MIND
                </div>
                <p class="card__content"><strong>Non-Technical Event</strong>
                    <br>
                    <strong>Time:</strong> 4:30 PM to 7:00 PM
                </p>

                <a href="event.php">
                    <div class="card__arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                            <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z">
                            </path>
                        </svg>
                    </div>
                </a>
            </div>



            </div>

            <div class="row">
                <div class="date">
                    <h2>31st March 2023</h2>
                </div>

                <div class="card" data-aos="zoom-in-left">
                    <div class="card__title">
                        TECHTONIC
                    </div>
                    <p class="card__content"><strong>Technical Event</strong>
                        <br>
                        <strong>Time:</strong> 4:30 PM to 7:00 PM
                    </p>

                    <a href="event.php">
                        <div class="card__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                                <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z">
                                </path>
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="card" data-aos="zoom-in-left">
                    <div class="card__title">
                        THE LOST FORTUNE
                    </div>
                    <p class="card__content"><strong>Non - Technical Event</strong>
                        <br>
                        <strong>Time:</strong> 4:30 PM to 7:00 PM
                    </p>

                    <a href="event.php">
                        <div class="card__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                                <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z">
                                </path>
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="card" data-aos="zoom-in-left">
                    <div class="card__title">
                        RETRO CRICKET AUCTION
                    </div>
                    <p class="card__content"><strong>Flagship Event</strong>
                        <br>
                        <strong>Time:</strong> 4:30 PM to 7:00 PM
                    </p>

                    <a href="event.php">
                        <div class="card__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                                <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z">
                                </path>
                            </svg>
                    </a>
                </div>
            </div>
            </div>

            <div class="row">
                <div class="date" id="ml" style="margin-left:50px;">
                    <h2>1st April 2023</h2>
                </div>

                <div class="card" id="ml" data-aos="zoom-in-left">
                    <div class="card__title">
                        SMART ROVER USING IOT
                    </div>
                    <p class="card__content">
                        <strong>Workshop</strong><br>
                        <strong>Time:</strong> 8:30 AM to 4:00 PM
                    </p>

                    <a href="event.php">
                        <div class="card__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                                <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z">
                                </path>
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="card" data-aos="zoom-in-left">
                    <div class="card__title">
                        CLOUD COMPUTING
                    </div>
                    <p class="card__content"><strong>Workshop</strong>
                        <br>
                        <strong>Time:</strong> 8:30 AM to 4:00 PM
                    </p>

                    <a href="event.php">
                        <div class="card__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                                <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z">
                                </path>
                            </svg>
                    </a>
                </div>
            </div>
            <div class="card" data-aos="zoom-in-left">
                <div class="card__title">
                    MISSING PIECES OF BUSINESS SAGA
                </div>
                <p class="card__content"><strong>Workshop</strong>
                    <br>
                    <strong>Time:</strong> 10:00 AM to 12:30 PM
                </p>

                <a href="event.php">
                    <div class="card__arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                            <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z">
                            </path>
                        </svg>
                        <a>
                    </div>
            </div>
            </div>

        </section>
    </center>

    <!--Content ends-->
    <!-- <script src="node_modules\bootstrap\dist\js\bootstrap.bundle.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="assets/js/schedule.js"></script>
    <script>
        jQuery(document).ready(function($) {
            "use strict"
            $("#loader").delay(1000).fadeOut("slow");
        });
    </script>
    <script>
        function menuOnClick() {
            document.getElementById("menu-bar").classList.toggle("change");
            document.getElementById("nav1").classList.toggle("change");
            document.getElementById("menu-bg").classList.toggle("change-bg");
        }
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        AOS.init({
            duration: 5000,
            once: false,
        });
    </script>
</body>

</html>