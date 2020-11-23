<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
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
        <li class="breadcrumb-item active" aria-current="page">Employee Login</li>
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
  <h2>Welcome Back</h2>
            <p class="login-paragraph">Please Login for access to the employee portal. For help with login issues, please email your administrator.</p>



          </div>



          <div class="container-fluid">
            <!--Login Form -->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                      <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                          <label>Username</label>
                          <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                          <span class="help-block"><?php echo $username_err; ?></span>
                      </div>
                      <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control">
                          <span class="help-block"><?php echo $password_err; ?></span>
                      </div>
                      <div class="form-group">
                          <input type="submit" class="btn btn-gold" value="Login">
                      </div>
                      <p>Don't have an account? <a href="employee-register.php">Sign up now</a>.</p>
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
