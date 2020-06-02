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



    <!-- Image and text -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-light default-color">
         <a class="navbar-brand" href="#"><p class="name-styles">Louis A. Rivera Jr.</p><!--navbar brand for image goes here yo -->  </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
           <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
               <a class="nav-link waves-effect waves-light" href="#"><!--home text goes here -->
                 <span class="sr-only">(current)</span>
               </a>
             </li>
           </ul>

           <ul class="navbar-nav ml-auto nav-flex-icons">
                <!--
             <li class="nav-item">
               <a class="nav-link waves-effect waves-light">
                 <i class="fas fa-atom"></i>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link waves-effect waves-light">
                 <i class="fab fa-gitkraken"></i>
               </a>
             </li>
           -->
             <li class="nav-item">
               <a class="nav-link waves-effect waves-light" href="https://github.com/louriv" target="_blank">
                <i class="fab fa-github"></i>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link waves-effect waves-light" href="https://www.linkedin.com/in/louisrivera1/" target="_blank">
                 <i class="fab fa-linkedin"></i>
               </a>
             </li>
             <!--
             <li class="nav-item">
               <a class="nav-link waves-effect waves-light">
                 <i class="fab fa-instagram"></i>
               </a>
             </li>
           -->
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="fas fa-user"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink">
                 <a class="dropdown-item waves-effect waves-light" href="#">Moodle Login</a>
                 <a class="dropdown-item waves-effect waves-light" href="#">Another action</a>
                 <a class="dropdown-item waves-effect waves-light" href="#">Something else here</a>
               </div>
             </li>
           </ul>
         </div>
       </nav>





      </a>
    </nav>


  <div class="container-fluid site-content">
    <div class="row hero">
      <!--<img class="img-fluid" src="img/computer.jpg" alt="hero image"> -->
    </div>


    <div class="flex-container">
      <div class="flex-item">
        <img src="https://www.lou.riveraprojects.com/img/204-logo.jpg" alt="1" class="img-fluid logo" />
      </div>
      <div class="flex-item">
        <img src="https://www.lou.riveraprojects.com/img/Scubadelphia.jpg" alt="2" class="img-fluid logo" />
      </div>
      <div class="flex-item">
        <img src="https://www.lou.riveraprojects.com/img/gardensplaza-logo.jpg" alt="3" class="img-fluid logo" />
      </div>
      <div class="flex-item">
        <img src="https://www.lou.riveraprojects.com/img/modishmuse.jpg" alt="4" class="img-fluid logo" />
      </div>
      <div class="flex-item">
        <img src="https://www.lou.riveraprojects.com/img/teama-logo.jpg" alt="5"class="img-fluid logo" />
      </div>
      <!-- second row -->

      <div class="flex-item">
        <img src="https://www.lou.riveraprojects.com/img/sj-marketing.jpg" alt="2" class="img-fluid logo" />
      </div>
      <div class="flex-item">
        <img src="https://www.lou.riveraprojects.com/img/609.jpg" alt="3" class="img-fluid logo" />
      </div>
      <div class="flex-item">
        <img src="http://localhost/gitweb/RiveraProjects/img/r-logo.png" alt="4" class="img-fluid logo" />
      </div>

    </div>

</div>
<!--
    <div class="row">
      <div class="col-sm-6 left">
     <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1350&amp;q=80" class="img-fluid">
      </div>
      <div class="col-sm-6 bio">
        <div class="row">
          <img src="img/r-logo.png" alt="logo" class="img-fluid">

          <h1>Louis A. Rivera Jr.</h1>
          <h2>Computer Based Training Developer</h2>
        </div>


        <p>The role is supporting the Defense Information Systems Agency (DISA) Cybersecurity Network Operations (CyberNetOps) Design Deploy Sustain (CNODDS) contract as a Computer-based Training Software Developer.</p>

        <p><?php echo "hello world"; ?></p>
        <p><?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>

        <button class="btn btn-primary">Button stuff </button>
      </div>

    </div>
-->




  </div>

  <!--universal footer -->
  <?php include ('includes/footer.php'); ?>

  <!--footer scripts -->
  <?php include ('includes/footer-scripts.php'); ?>


</body>
</html>
