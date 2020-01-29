<?php
session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!doctype HTML>

<!-- Write the discription of this site -->

<html>

    <head>

        <title>
            Classroom
        </title>

        <meta charset='UTF-8'>

        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
		
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- bootstrap stylesheet -->
		<link rel="stylesheet" type="text/css" href="./stylesheets/bootstrap.css">
		<!-- Your owen stylesheet -->
		<link rel="stylesheet" type="text/css" href="./stylesheets/Template.css">
		<!-- Font-awesomesheets stylesheet -->
		<link rel="stylesheet" type="text/css" href="./stylesheets/font-awesome.css">
		
    </head>
 <body style="background-image: url('./images/Background.png'); padding-top: 70px;">	
<!-- ----------------------------------------------Here I start the NAV bar ------------------------------------------------------>	 
<?php include_once('./php/header-login.php'); ?>
<!-------------------------------------- After this the NAV have part of the page is done ---------------------------------------->
   <div class="row">
	   <div class='col-xs-1 col-md-6 col-lg-6'>
		   <textarea style="resize:none;height:400px;width:764px" >[sample workbook text here]</textarea>
	   </div>
	   <div class='col-xs-1 col-md-6 col-lg-6'>
		   <a href="https://appr.tc/?hd=true&stereo=true" target="test" align="right">Start</a>
		<iframe name="test" width="756px" height="384px" align="right"></iframe>
	   </div>
	   </div>
	<div class="row">
	   <div class='col-xs-6 col-md-6 col-lg-4'>
		   <textarea readonly style="resize:none;height:250px;width:512px">This is your linked student's workbook.
			   
<?php echo $row['course_id'] ?></textarea>
	   </div>
	   <div class="col-xs-1 col-md-1 col-lg-3">
		   <br>
		   <button type="button" class="btn btn-danger btn-lg">Panic</button>
		   <br>
		   <br>
		   <textarea readonly style="resize:none;height:165px;width:360px">-Ask the student's age.
-What hobbies the student enjoys the most.</textarea>
		</div>
		<div class='col-xs-1 col-md-6 col-lg-4'>
			<textarea readonly style="resize:none;height:250px;width:626px">[text chat]</textarea>
		</div>
   </div>
	 
</body>

</html>