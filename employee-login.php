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

      <div class="container">
        <div class="row"><!-- begin test area -->
          <div class="col-sm-12 col-md-4">
            <img src="../riveraprojects/img/login.jpg" alt="Employee Login" class="login-img d-none d-md-block img-fluid">
          </div>

          <div class="col">

            <div class="container-fluid">
            <h3>Welcome Back</h3>
            <p class="login-paragraph">Please Login for access to the employee portal</p>



          </div>



          <div class="container-fluid">
            <!--Login Form -->
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Remember Me</label>
    </div>
  <button type="submit" class="btn btn-gold">Submit</button>
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
