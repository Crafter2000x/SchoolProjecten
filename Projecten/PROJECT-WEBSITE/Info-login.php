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
<!-- ---------------------------------------------- Top of the page -------------------------------------------------------------->
        <?php include_once ('./php/toppage.php'); ?>
<!-- ----------------------------------------------Here I start the NAV bar ------------------------------------------------------>	 
	<?php include_once('./php/header-login.php'); ?> 
<!-------------------------------------- After this the NAV have part of the page is done ---------------------------------------->
   <div class="row">
	   <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1'>
		   <!-- to do write sheit-->
		   
	   </div>
	   
	   <div class='col-xs-5 col-sm-5 col-md-5 col-lg-5 well-green'>
		   <!-- to do write sheit-->
		   <p STYLE="font-size: 24px; font-family: serif;"> <b>Global Classroom :</b> Global Classroom is a project created by Global Exploration with the idea to connect differnt cultures around the world in the way of connecting them trough the interenet and learn more about each other in the way of lessons and chatting with them across the world. <br> W: <a href="https://www.global-exploration.nl/"> Global Exploration </a> <br> E: info@global-exploration.nl <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <img src=".\images\logo-global-exploration.png" alt="Global Exploration" width="490px"></p>
	   </div>	   
	   
	  <div class='col-xs-5 col-sm-5 col-md-5 col-lg-5 well-green'>
		   <!-- to do write sheit-->
		   <p STYLE="font-size: 24px; font-family: serif;">
		<b>Global Exploration:</b> Global Exploration Foundation thrives to achieve four goals. <br> <br>
		<b>Visie global
		Intercultural exchange:</b>
		The intercultural exchange  is the visit of Dutch youngsters to our foreign partners. Learn,
		talk, play sports, sing and work, together. This to learn that people around the world are different, 
		and that’s fine. <br> <br>
		Schools for Schools:
		Schools for Schools is the project in which we work with Wild Geese to build and refurbish schools. <br> <br>
		<b>Let’s Work:</b>
		In the roll up your sleeves project our youth will be working together with the locals to do small shores; refurbishing sports fields, planting trees, building bookshelves, cleaning and so much more depending on the local needs and wishes. wensen en behoeftes. <br> <br>
		<b>Global Awareness:</b>
		Awareness in the Netherlands we achieve with our Global Ambassador project. Each youngster will reach at least 150 people who will listen to their story and hopefully will think differently about the world hearing so. <br> <br> 
	   	</p>
	   </div>
	   
	   <div class='col-xs-1 col-sm-1 col-md-1 col-lg-1'>
		   <!-- to do write sheit-->
		   
	   </div>
   </div>
	 
</body>

</html>