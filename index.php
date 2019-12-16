<!DOCTYPE html>
<html lang="en" dir="ltr">

     <!--header scripts -->
     <?php include ('includes/header-scripts.php'); ?>



  <body class="site">
    <!--head navbar -->
    <?php include ('includes/nav.php'); ?>

  <div class="container-fluid site-content">
    <h1>hello world</h1>
  
    <p>next i need to add the bootstrap dependencies</p>
    <p>alright we added the bootstrap dependencies</p>

    <?php echo "hello world"; ?>
    <?php echo $_SERVER['HTTP_USER_AGENT']; ?>

    <button class="btn btn-primary">Button stuff </button>
  </div>

  <!--universal footer -->
  <?php include ('includes/footer.php'); ?>

  <!--footer scripts -->
  <?php include ('includes/footer-scripts.php'); ?>


</body>
</html>
