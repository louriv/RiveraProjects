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

<head>
     <!--header scripts -->
     <?php include ('includes/header-scripts.php'); ?>
     <title>Royal Technology | Louis A. Rivera Jr. | Submit a Ticket</title>
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

            <h2>Submit a Ticket</h2>
            <p> If you are having issues, submit a ticket below. We will get back to you shortly.</p>

            <script src="https://desk.zoho.com/portal/api/feedbackwidget/555389000000156138?orgId=730922650&displayType=iframe"></script>
  <iframe id="zsfeedbackFrame" width="890" height="570" name="zsfeedbackFrame" scrolling="no" allowtransparency="false" frameborder="0" border="0" src="https://desk.zoho.com/support/fbw?formType=AdvancedWebForm&fbwId=edbsn383778161af29273317bf524b4310e6065afd70f6be9933494cf7bd54b88dbbd&xnQsjsdp=A3ZERCxBSwnwZmTHHfGK-w$$&mode=showNewWidget&displayType=iframe"></iframe>

          </div>


        </div>
      </div>





  </div>
  <div class="col-sm-2">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <p class="card-title">This helpdesk is integrated with Zoho Desk. This is another integration into a custom web application.</p>

        <p>to login and check tickets received, you must go to the Zoho Help Desk login by clicking the button below. </p>



  <a href="https://accounts.zoho.com/signin?servicename=ZohoSupport&signupurl=https://www.zoho.com/desk/signup.html" target="_blank" class="btn btn-primary">Zoho Desk Login</a>
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
