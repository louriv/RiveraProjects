<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: employee-login.php");
            } else{
                echo "Something went wrong. Please try again later.";
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
     <?php include ('includes/header-scripts.php'); ?>



  <body class="site">

    <!--head navbar -->
    <?php include ('includes/headbar.php'); ?>

    <!--head navbar -->
    <?php include ('includes/logobar.php'); ?>

    <!--head navbar -->
    <?php include ('includes/nav.php'); ?>




    <!-- begin content -->
    <div class="site-content">

<div class="container">
  <div class="row">
    <div class="col">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/" class="breadlinks">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Employee Registration</li>
  </ol>
</nav>
</div>
</div>
</div>

      <div class="container content-padding">
        <div class="row">
            <div class="col-sm-12">

            </div>
        </div>
        <div class="row"><!-- begin test area -->
          <div class="col-sm-12 col-md-4">
            <img src="../riveraprojects/img/login.jpg" alt="Employee Login" class="login-img d-none d-md-block img-fluid">
          </div>

          <div class="col">

            <div class="container-fluid">





          </div>



          <div class="container-fluid">
            <!--Login Form -->
            <h2>Sign Up</h2>
                   <p>Please fill this form to create an account.</p>
                   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                       <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                           <label>Username</label>
                           <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                           <span class="help-block"><?php echo $username_err; ?></span>
                       </div>
                       <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                           <label>Password</label>
                           <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                           <span class="help-block"><?php echo $password_err; ?></span>
                       </div>
                       <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                           <label>Confirm Password</label>
                           <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                           <span class="help-block"><?php echo $confirm_password_err; ?></span>
                       </div>
                       <div class="form-group">
                           <input type="submit" class="btn btn-gold" value="Submit">
                           <input type="reset" class="btn btn-default" value="Reset">
                       </div>
                       <p>Already have an account? <a href="employee-login.php">Login here</a>.</p>
                   </form>
<!--End Login Form -->
              </div>


        </div><!-- end testing area-->
    </div>
  </div>




</div>












  <!--universal footer -->
  <?php include ('includes/footer.php'); ?>

  <!--footer scripts -->
  <?php include ('includes/footer-scripts.php'); ?>


</body>
</html>
