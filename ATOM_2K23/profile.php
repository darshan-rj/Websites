<?php
@ob_start();
session_start();

// $email = $_SESSION['email'];

if (isset($_SESSION['email'])) {

  $email = $_SESSION['email'];

  include_once 'includes/dbh.inc.php';


  $query = "SELECT * FROM members WHERE email = '$email'";
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $num_row = mysqli_num_rows($result);
  $row = mysqli_fetch_array($result);

  if ($num_row >= 1) {

    $_SESSION['login'] = $row['id'];
    $id = $row['id'];
    $_SESSION['fname'] = $row['fname'];
    $_SESSION['mobile'] = $row['mobile'];
    $_SESSION['department'] = $row['department'];
    $_SESSION['events'] = $row['events'];
    $_SESSION['workshops'] = $row['workshops'];
    $_SESSION['flagship'] = $row['flagship'];
  } else {
    echo 'false';
  }

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="assets/atom2k23.ico" rel="icon">
    <title>ATOM 2K23</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a74d0f3882.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome Icons-->
    <script src="https://kit.fontawesome.com/a74d0f3882.js" crossorigin="anonymous"></script>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imprima&family=Nova+Round&family=Poppins&family=Raleway&family=Roboto&family=Shippori+Antique&family=Stoke&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="assets/css/common-styles.css">
    <link rel="stylesheet" href="assets/css/nav.css">

    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {

        $("#paybtn").click(function() {
          type = "GEN";
          $.ajax({
            type: "POST",
            url: "modules/pay_process.php",
            data: "type=" + type,
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
          return false;
        });
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function() {

        $("#save").click(function() {
          name = $("#name").val();
          email = $("#email").val();
          number = $("#number").val();
          passwd = $("#passwd").val();

          $.ajax({
            type: "POST",
            url: "edit_profile.php",
            data: "name=" + name + "&email=" + email + "&number=" + number + "&passwd=" + passwd,
            success: function(html) {
              alert(html);
              window.location.href = "profile.php";
            },

            beforeSend: function() {
              $("#add_err2").html("Loading...");
            }
          });
          return false;
        });
      });
    </script>

    <style>
      @font-face {
        font-family: FlareReg;
        src: url('assets/fonts/Flare-Regular.otf');
      }

      @font-face {
        font-family: lemonmilk;
        src: url('assets/fonts/LemonMilkRegular.ttf');
      }
    </style>
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
          <li><a href="index.php"><i class="fas fa-home" style="padding-right:10px; color:#650404"></i>Home</a></li>
          <li><a href="event.php"><i class="fas fa-calendar-day" style="padding-right:10px; color:#650404"></i>Events</a>
          </li>
          <li><a href="schedule.php"><i class="fas fa-hourglass-half" style="padding-right:10px; color:#650404"></i>Schedule</a></li>
          <!-- <li><a href="login.php" class="nav-link scrollto">Register</a></li> -->
          <?php require_once 'user.php'; ?>
        </ul>
      </nav>
    </div>
    <div class="menu-bg" id="menu-bg"></div>


    <section>
      <header class="m-0">
        <div id="header2" class="d-flex align-items-center header2 ">
          <div class="container d-flex align-items-center justify-content-center mt-4">


            <h1 style="font-family:'lemonmilk'; color:#ffd6d6;">PROFILE</h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <!--onclick="history.back()" -->

          </div>
          <button class="homebtn" title="Home" onclick="history.back()"><i class="fas fa-reply" aria-hidden="true"></i></button>
        </div>
      </header>


      <div class="container">
        <div class="main-body">
          <!-- /Breadcrumb -->

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card minheight">
                <div class="card-body d-flex align-items-center justify-content-center text-center">
                  <div class="d-flex flex-column align-items-center text-center pad-15">
                    <!-- <img src="assets/img/gender-neutral-user.png" class="img-radius" alt="User-Profile-Image" style="min-width: 75px"> -->
                    <!-- <i class="fa-solid fa-user" style="font-size:50px;"></i> -->
                    <div style="width:100px;height:100px;margin-bottom:50px;">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#ffd6d6"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                      </svg>
                    </div>
                    <div class="mt-3">
                      <h4 style="text-align:center;">
                        <?php echo $_SESSION['fname']; ?>
                      </h4>


                      <p class="text-muted font-size-sm">
                        PSG COLLEGE OF TECHNOLOGY
                      </p>
                      <div class="btns d-flex flex-row justify-content-center">
                        <button type="button" class="editBtn" data-toggle="modal" data-target="#Edit">Edit</button>
                        <a href="logout.php" class="logoutbutton" type="button" style="text-decoration:none;"><button type="button" class="logoutBtn">Logout</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3">
                <div class="card-body">

                  <div class="row">
                    <div class="col-sm-4">
                      <h6 class="mb-0">ATOM ID</h6>
                    </div>
                    <div class="col-sm-8 text-secondary">
                      <?php echo "ATOM23" . $_SESSION['login']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-4">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-8 text-secondary">
                      <?php echo $_SESSION['email']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-4">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-8 text-secondary">
                      <?php echo $_SESSION['mobile']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-4">
                      <h6 class="mb-0">Department</h6>
                    </div>
                    <div class="col-sm-8 text-secondary">
                      <?php echo $_SESSION['department']; ?>
                    </div>
                  </div>
                  </br>
                </div>
              </div>
            </div>

            <div class="col-md-8">
              <h4 class="d-flex align-items-center mb-3 justify-content-center"><i class="material-icons text-danger mr-2">Payment Details</i></h4>
              <center>
                <p class="text-muted font-size-sm">Registered events will be displayed below*</p>
              </center>
              <div class="row gutters-sm">

                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h4 class="d-flex align-items-center mb-3"><i class="material-icons text-danger mr-2">
                          Payments</i></h4>
                      <hr>
                      <h5>Previous Payments</h5>
                      <?php
                      $query = "SELECT * FROM payment WHERE id = '$id' AND payment_status='Success'";
                      $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                      $num_row = mysqli_num_rows($result);
                      if ($num_row > 0) {
                        echo '<table border=0 class="prevpayment">';
                        while ($row = mysqli_fetch_array($result)) {
                          echo "<tr>";
                          $date = date('d-m-Y', strtotime($row['added_on']));
                          echo "<td>" . $date . "</td>";
                          echo "<td align='right'>" . $row['amount'] . " INR</td>";
                          echo "</tr>";
                        }
                        echo "</table>";
                        echo "<br/>";
                      } else {
                        echo "<p>None</p>";
                      }
                      ?>

                      <!-- <h5>Pending Payments</h5> -->
                      <!-- 
                    <?php
                    if ($_SESSION["genfee"] != 'paid') {
                    ?>
                    <p>General fee &emsp;&emsp; - &emsp;&emsp; Rs.
                      <?php if (isset($_SESSION['cgname']) && $_SESSION['cgname'] == "PSG College of Technology") {
                        echo "100";
                      } else {
                        echo "150";
                      } ?> -->
                      </p>
                      <div class="d-flex col-12 align-items-center justify-content-center">
                        <!-- <form method="post" id="payform">
                          <div id="add_err1" style="color: white"></div>
                          <input type="submit" name="paybtn" class="payBtn" id="paybtn" value="Pay Now" />
                        </form> -->
                      </div>
                    <?php } else {
                      echo "<p>None</p>";
                    }
                    ?>

                    </div>
                  </div>
                </div>

                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="d-flex align-items-center mb-3"><i class="material-icons text-danger mr-2">General Events</i></h5>
                      <hr>
                      <ul>
                        <?php
                        $ev_arr = explode(", ", $_SESSION['events']);
                        $num = count($ev_arr);
                        for ($i = 0; $i < $num - 1; $i++) {
                          echo '<li>' . $ev_arr[$i] . '</li>';
                        }
                        ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="d-flex align-items-center mb-3"><i class="material-icons text-danger mr-2">Workshops</i>
                      </h5>
                      <hr>
                      <ul>
                        <?php
                        $query1 = "SELECT * FROM workshops WHERE email = '$email'";
                        $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
                        $row1 = mysqli_fetch_array($result1);
                        $ws_arr = explode(", ", $_SESSION['workshops']);
                        $num1 = count($ws_arr);
                        for ($i = 0; $i < $num1 - 1; $i++) {
                          $ws_name = $ws_arr[$i];
                          if ($row1[$ws_name] == "paid") {
                            echo '<li>' . $ws_name . '</li>';
                          } elseif ($row1["MISSING PIECES OF BUSINESS SAGA"] == "yes") {
                            echo '<li>' . "MISSING PIECES OF BUSINESS SAGA" . '</li>';
                          }
                        }
                        ?>

                      </ul>
                      <!-- <h5 class="d-flex align-items-center mb-3"><i class="material-icons text-danger mr-2">Paper
                        Presentation</i></h5>
                    <hr>
                    <ul>
                      <?php
                      $query2 = "SELECT * FROM paperpres WHERE email = '$email'";
                      $result2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));
                      $row2 = mysqli_fetch_array($result2);
                      $ps_arr = explode(", ", $_SESSION['paperpres']);
                      $num2 = count($ps_arr);
                      for ($i = 0; $i < $num2 - 1; $i++) {
                        $ps_name = $ps_arr[$i];
                        if ($row2[$ps_name] == "yes") {
                          echo '<li>' . $ps_name . '</li>';
                        }
                      }
                      ?>
                    </ul> -->
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="d-flex align-items-center mb-3"><i class="material-icons text-danger mr-2">Flagship</i>
                      </h5>
                      <hr>
                      <ul>
                        <?php
                        $query3 = "SELECT * FROM flagship WHERE email = '$email'";
                        $result3 = mysqli_query($conn, $query3) or die(mysqli_error($conn));
                        $row3 = mysqli_fetch_array($result3);
                        $fs_arr = explode(", ", $_SESSION['flagship']);
                        $num3 = count($fs_arr);
                        for ($i = 0; $i < $num3 - 1; $i++) {
                          $fs_name = $fs_arr[$i];
                          if ($row3[$fs_name] == "yes") {
                            echo '<li>' . $fs_name . '</li>';
                          }
                        }
                        ?>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--  MODAL  -->
      <div class="modal fade" id="Edit" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content" style="background:#ffd6d6">
            <div class="modal-header">
              <h4>PROFILE EDIT</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
              <div id="add_err2" style="color:#650404;margin-top:5%;text-align:center;"></div>
              <form action="">
                <div id="add_err2" style="color: white"></div>
                <div class="mb-3" style="align-items:center">
                  <input type="text" class="form-control-lg" id="name" placeholder="Name" name="text" value="<?php echo $_SESSION['fname'] ?>">
                </div>
                <div class="mb-3 mt-3">
                  <input type="email" class="form-control-lg" id="email" placeholder="Enter email" name="email" value="<?php echo $_SESSION['email'] ?>">
                </div>
                <div class="mb-3">
                  <input type="number" class="form-control-lg" id="number" placeholder="Mobile No." name="mobile" value="<?php echo $_SESSION['mobile'] ?>">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control-lg" id="passwd" placeholder="Enter Password" name="password">
                </div>
                <div class="modal-footer justify-content-center">
                  <button type="button" class="save-btn" id="save">Save changes</button>
                  <button type="button" class="cancel-btn" data-dismiss="modal">Cancel</button>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </section>

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
        <h5 class="text-center mx-4" style="font-family:'production';color:#ffd6d6">IEEE STUDENTS CHAPTER <span style="font-family:'Agency FB';font-size:20px;font-weight:700;color:#ffd6d6">12951</span> | <span style="font-family:'production'; font-size:20px; color:#ffd6d6">PSG COLLEGE OF TECHNOLOGY</span></h5>
      </div>
    </footer>
    <!--Content ends-->

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
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>

  </body>

  </html>

<?php

} else {
  header("location:login.php ");
}
?>