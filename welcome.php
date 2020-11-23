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
    <a href="password-reset.php" class="btn btn-gray btn-dash">Dashboard  </a>
    <a href="password-reset.php" class="btn btn-gray btn-dash">Calendar </a>
    <a href="password-reset.php" class="btn btn-gray btn-dash">Reset Your Password</a>
    <a href="logout.php" class="btn btn-gray btn-dash">Sign Out of Your Account</a>
</div>
</div>
<div class="col-sm-8">
    <h2>Welcome to your Dashboard, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h2>
  <p><span><i class="fas fa-quote-left"></i></span> When you pay attention to detail, the big picture will take care of itself. -George St-Pierre</p>

  <p>Design skills are few and far between. It's a must have skill if you want a consistent brand. Logos, brochures, colors, branding and fonts all define an organization. I have the knowledge and foundation to design beautiful experiences.</p>
  <p>If you're willing to sacrifice design, you're willing to sacrifice clients.</p>

    <iframe src="https://outlook.office365.com/owa/calendar/0c684c5fc9904488a16f0a78c8edbb3f@bylight.com/4fe2ea1398074eeab9fc0a5cd4f32e0d14191551599972090951/calendar.html" width="100%" height="600" scrolling="no" frameborder="0"></iframe>

  </div>
  <div class="col-sm-2">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Last Login</h5>
    <?php
    $currentDateTime = date('m-d-y H:i');

    echo $currentDateTime;
?>

    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
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
