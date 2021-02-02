<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

     <!--header scripts -->
     <head>
     <?php include ('includes/header-scripts.php'); ?>
     <title>Royal Technology | Louis A. Rivera Jr. | Technology Consultant</title>
     </head>



  <body class="site">

    <!--head navbar -->
    <?php include ('includes/headbar.php'); ?>

    <!--head navbar -->
    <?php include ('includes/logobar.php'); ?>

    <!--head navbar -->
    <?php include ('includes/nav.php'); ?>

    <!--head navbar -->


    <!-- begin content -->
    <div class="site-content">

<div class="container content-padding">
  <div class="row">
    <div class="col">
    <nav aria-label="breadcrumb">
      <!--<ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/" class="breadlinks">Dashboard</a></li>
        <li class="breadcrumb-item">Overview</li>
      </ol>
    -->
</nav>
</div>
</div>
</div>

<div class="container-fluid dashboard-nav">
  <div class="row">

    <!--dash navbar -->
    <?php include ('includes/dash-nav.php'); ?>


<div class="col-sm-8">



      <div class="container-fluid">


        <div class="row">
          <div class="col">

                  <h2>Google Analytics</h2>
                  <p>site analytics</p>
          </div>

        </div>
      </div>





  </div>
  <div class="col-sm-2">
    <div class="card" style="width: 18rem;">
      <div class="card-body">

    <p class="card-title">This integration is done using Google Analytics to track site usage and such. Simply add a script in the footer, then use an embed code from google to use it on a custom web application.</p>


  <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
</div>
</div>


      </div>




    <!-- begin content -->
    <div class="site-content">
      <div class="container-fluid">
        <div class="row"><!-- begin test area -->


        </div><!-- end testing area-->
    </div>
  </div>

















  <!--universal footer -->
  <?php include ('includes/footer.php'); ?>

  <!--footer scripts -->
  <?php include ('includes/footer-scripts.php'); ?>


</body>
</html>
