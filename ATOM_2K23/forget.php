<?php
@ob_start();
session_start();

if (!isset($_SESSION['email'])) {

?>

    <!doctype html>
    <html>

    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Atom-2k22</title>
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
        <link href='assets/css/signup.css' rel='stylesheet'>
        <link rel="stylesheet" href="assets/css/nav.css">
        <link rel="stylesheet" href="assets/css/common-styles.css">
        <link rel="stylesheet" href="assets/css/signup.css">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                $("#request").click(function() {

                    email = $("#remail").val();
                    $.ajax({
                        type: "POST",
                        url: "includes/reset-req.inc.php",
                        data: "email=" + email,
                        success: function(html) {
                            if (html == 'true') {

                                $("#add_err4").html('<div class="alert alert-success"> \
                                                        <strong>Check your Email!</strong> \ \
                                                    </div>');

                                //window.location.href = "index.php";

                            } else if (html == 'false') {
                                $("#add_err4").html('<div class="alert alert-danger"> \
                                                        <strong>Email not found!</strong> \ \
                                                    </div>');


                            } else {
                                $("#add_err4").html('<div class="alert alert-danger"> \
                                                        <strong>Error</strong> processing request. Please try again. \ \
                                                    </div>');

                            }
                        },
                        beforeSend: function() {
                            $("#add_err4").html("loading...");
                        }
                    });
                    return false;
                });
            });
        </script>

        <script type='text/javascript' src=''></script>
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
        <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>

        <style>
            @font-face {
                font-family: AquireBold;
                src: url('assets/fonts/AquireBold.otf');
            }

            @font-face {
                font-family: MonumentReg;
                src: url('assets/fonts/MonumentExtended-Regular.otf');
            }


            @font-face {
                font-family: FlareReg;
                src: url('assets/fonts/Flare-Regular.otf');
            }

            @font-face {
                font-family: Aquatico;
                src: url('assets/fonts/Aquatico-Regular.otf');
            }

            @font-face {
                font-family: production;
                src: url('assets/fonts/production.ttf');
            }
        </style>
    </head>

    <body oncontextmenu='return false' class='snippet-body'>
        <section class="body">
            <div class="container">
                <div class="login-box">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="logo1">
                                <span class="logo-font">ATOM 2K23</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <br>
                            <div id="add_err4"></div>
                            <h3 class="header-title">Forget Password</h3>
                            <div id="add_err4 text-dark"></div>
                            <form class="login-form" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="email" id="remail" class="form-control" placeholder="Mail id">
                                </div>
                                <button id="request" class="btn btn-outline-primary rounded-3 text-center">Send Link</button>
                                <div class="form-group">
                                    <div class="text-center"><a href="login.php">Close</a></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script type='text/javascript'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
            function menuOnClick() {
                document.getElementById("menu-bar").classList.toggle("change");
                document.getElementById("nav").classList.toggle("change");
                document.getElementById("menu-bg").classList.toggle("change-bg");
            }
        </script>

        <script>
            jQuery(document).ready(function($) {
                "use strict"
                $("#loader").delay(1000).fadeOut("slow");
            });
        </script>
    </body>

    </html>
<?php

} else {
    if (isset($_SESSION['email'])) {
        header("location:profile.php ");
    }
}

?>