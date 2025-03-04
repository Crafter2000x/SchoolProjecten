<?php
if(!$_SESSION['bAccessGranted'])
    {            
        echo("Session access granted invalid");
        header('location:login.php');
    }
?>
<div class='row'>
    <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
        <nav class='navbar navbar-default'>
  <div class='container-fluid'>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
        <i class='fa fa-bars'></i>
      </button>
      <a class='navbar-brand' href='#'>Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
      <ul class='nav navbar-nav'>
        <li><a href='#'>Menu1 <span class='sr-only'>(current)</span></a></li>
        <li><a href='#'>Menu2</a></li>
        <li class='dropdown'>
            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Bestand <span class='caret'></span></a>
            <ul class='dropdown-menu'>
                <li><a href='./mainpage.php'>Mainpage</a></li>
                <li><a href='./register.php'>Registration</a></li>
                <li><a href='#'>Something else here</a></li>
                <li role='separator' class='divider'></li>
                <li><a href='#'>Separated link</a></li>
                <li role='separator' class='divider'></li>
                <li><a href='#'>One more separated link</a></li>
            </ul>
        </li>
        <li class='dropdown'>
            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Bewerken <span class='caret'></span></a>
            <ul class='dropdown-menu'>
                <li><a href='./mainpage.php'>Mainpage</a></li>
                <li><a href='./register.php'>Registration</a></li>
                <li><a href='#'>Something else here</a></li>
                <li role='separator' class='divider'></li>
                <li><a href='#'>Separated link</a></li>
                <li role='separator' class='divider'></li>
                <li><a href='#'>One more separated link</a></li>
            </ul>
        </li>
        <li class='dropdown'>
            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Verwijderen <span class='caret'></span></a>
            <ul class='dropdown-menu'>
                <li><a href='./mainpage.php'>Mainpage</a></li>
                <li><a href='./register.php'>Registration</a></li>
                <li><a href='#'>Something else here</a></li>
                <li role='separator' class='divider'></li>
                <li><a href='#'>Separated link</a></li>
                <li role='separator' class='divider'></li>
                <li><a href='#'>One more separated link</a></li>
            </ul>
        </li>
      </ul>
      <form class='navbar-form navbar-left'>
        <div class='form-group'>
          <input type='text' class='form-control' placeholder='Search'>
        </div>
        <button type='submit' class='btn btn-default'>Submit</button>
      </form>
      <ul class='nav navbar-nav navbar-right'>
        <li><a href='#'>Link</a></li>
        <li class='dropdown'>
          <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Dropdown <span class='caret'></span></a>
          <ul class='dropdown-menu'>
            <li><a href='#'>Action</a></li>
            <li><a href='#'>Another action</a></li>
            <li><a href='#'>Something else here</a></li>
            <li role='separator' class='divider'></li>
            <li><a href='#'>Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    </div>
</div>

