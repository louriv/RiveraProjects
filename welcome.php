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
     <title>Royal Technology | Louis A. Rivera Jr. | Employee Home</title>
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


    <div class="yesDisplay">
      <div class="container-fluid">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <p style="margin-bottom: 0px;"> You have successfully logged in. Welcome to your Dashboard, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></p>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

        <div class="row">
          <div class="col-sm-6">
          <p>Welcome to the Royal Technology online portal. This is an area where employees or clients may go online to access client or company specific information. I have integrated several other technologies within this portal. You may visit the integrations by clicking the links to the left.</p>
          <p>furthermore, you may download my Resume, submit a ticket, or change your password to test the functionality.</p>
          <p>if you have any questions, you may email me at: lrivera@royaltech.io</p>
          </div>
          <div class="col">
            <img src="../img/computer.jpg" alt="Website Launch" class="img-thumbnail img-fluid">

          </div>
          <div class="col">

          </div>
        </div>
      </div>
        </div>



  </div>
  <div class="col-sm-2">
    <div class="card" style="width: 18rem;">
      <div class="card-body">

    <p class="card-title">Last Login: <?php $currentDateTime = date('m-d-y'); echo $currentDateTime; ?></p>
<p>Here is a sidebar widget that can be used to display login information like above or provide other, supplemental functionality.</p>

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
