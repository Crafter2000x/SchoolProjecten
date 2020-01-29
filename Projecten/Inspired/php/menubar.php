 

<!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">INSPIRED</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
              <li class="nav-item
                <?php if($_SESSION['activeMenu'] == "homepage"){echo(" active");}?>
                ">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            
            <li class="nav-item
                <?php if($_SESSION['activeMenu'] == "workshops"){echo(" active");}?>
                ">
              <a class="nav-link" href="workshopsphp.php">WORKSHOPS</a>
            </li>
            
           <li class="nav-item
                <?php  if($_SESSION['activeMenu'] == "contactpage"){echo( "active");}?>
                ">
              <a class="nav-link" href="contactpage.php">CONTACT</a>
            </li>
            
           <!-- <li class="nav-item
                <?php // if($_SESSION['activeMenu'] == "loginpage"){echo( "active");}?>
                ">
              <a class="nav-link" href="login.php">LOGIN</a>
            </li> -->
            
            
            
          </ul>
        </div>
      </div>
    </nav> 
