<!DOCTYPE html>
<html lang="en" dir="ltr">

     <!--header scripts -->
     <?php include ('includes/header-scripts.php'); ?>



  <body class="site">
    <!--head navbar -->
    <?php include ('includes/nav.php'); ?>

  <div class="container-fluid site-content ">
    <div class="row hero">
      <!--<img class="img-fluid" src="img/computer.jpg" alt="hero image"> -->
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4">
        <h1>hello world</h1>

        <p>next i need to add the bootstrap dependencies</p>
        <p>alright we added the bootstrap dependencies</p>
      </div>
      <div class="col-sm-8">
        <h1>Louis A. Rivera Jr.</h1>
        <h2>Computer Based Training Developer</h2>

        <p>next i need to add the bootstrap dependencies</p>
        <p>alright we added the bootstrap dependencies</p>
        <?php echo "hello world"; ?>
        <?php echo $_SERVER['HTTP_USER_AGENT']; ?>

        <button class="btn btn-primary">Button stuff </button>
      </div>

    </div>





  </div>

  <!--universal footer -->
  <?php include ('includes/footer.php'); ?>

  <!--footer scripts -->
  <?php include ('includes/footer-scripts.php'); ?>


</body>
</html>
