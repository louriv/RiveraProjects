<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: employee-login.php");
    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);

            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: employee-login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

     <!--header scripts -->
     <head>
     <?php include ('includes/header-scripts.php'); ?>
     <title>Royal Technology | Louis A. Rivera Jr. | Password Reset</title>
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
          <div class="col-sm-8">

            <h2>Reset Password</h2>
          <div class="wrapper">

              <p>Please fill out this form to reset your password.</p>
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                  <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                      <label>New Password</label>
                      <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
                      <span class="help-block"><?php echo $new_password_err; ?></span>
                  </div>
                  <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                      <label>Confirm Password</label>
                      <input type="password" name="confirm_password" class="form-control">
                      <span class="help-block"><?php echo $confirm_password_err; ?></span>
                  </div>
                  <div class="form-group">
                      <input type="submit" class="btn btn-gold" value="Submit">
                      <a class="btn btn-link" href="welcome.php">Cancel</a>
                  </div>
              </form>
          </div>
          </div>


        </div>
      </div>





  </div>
  <div class="col-sm-2">
    <div class="card" style="width: 18rem;">
      <div class="card-body">

    <p class="card-title">Last Login: <?php $currentDateTime = date('m-d-y'); echo $currentDateTime; ?></p>


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
