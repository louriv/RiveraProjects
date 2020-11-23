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
     <?php include ('includes/header-scripts.php'); ?>



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
    <div class="col-sm-2">
  <div class="btn-group-vertical">
    <button id="dashboard" class="btn btn-gray btn-dash">Dashboard</button>
    <button id="calendar" class="btn btn-gray btn-dash">Calendar</button>
    <button id="analytics" class="btn btn-gray btn-dash">Google Analytics</button>
    <button id="helpdesk" class="btn btn-gray btn-dash">Submit a Ticket</button>
    <a type="button" class="btn btn-gray btn-dash" rel="noopener noreferrer" href="../RiveraProjects/pdf/RiveraResume.pdf" target="_blank">Rivera Resume</a>
    <a href="password-reset.php" class="btn btn-gray btn-dash">Reset Your Password</a>
    <a href="logout.php" class="btn btn-gray btn-dash">Sign Out of Your Account</a>

</div>
</div>
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
          <div class="col">
          <h2>Important Links</h2>
          </div>
          <div class="col">
            <img src="../riveraprojects/img/computer.jpg" alt="Website Launch" class="img-thumbnail img-fluid">

          </div>
          <div class="col">

          </div>
        </div>
      </div>
        </div>

    <div class="noDisplay">
      <iframe src="https://outlook.office365.com/owa/calendar/0c684c5fc9904488a16f0a78c8edbb3f@bylight.com/4fe2ea1398074eeab9fc0a5cd4f32e0d14191551599972090951/calendar.html" width="100%" height="600" scrolling="no" frameborder="0"></iframe>

    </div>

    <div class="noDisplay">
      <p>some other stuff for the analytics tab</p>
    </div>




  </div>
  <div class="col-sm-2">
    <div class="card" style="width: 18rem;">
      <div class="card-body">

    <p class="card-title">Last Login: <?php $currentDateTime = date('m-d-y H:i'); echo $currentDateTime; ?></p>


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
