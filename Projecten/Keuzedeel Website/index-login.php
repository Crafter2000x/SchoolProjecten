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
        
	<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
           
            <iframe align='center' src="http://free.timeanddate.com/clock/i64b7ixk/n1307/szw110/szh110/hoc0f9/hbw3/cf100/hgr0/hwc000/fiv0/fas30/fdi72/mqv0/mhc000/mhs3/mhl20/mhw1/mhd84/mmv0/hhs1/hms1/hsc000/hss1" frameborder="0" width="110" height="110"></iframe>
      
        </div>
			
	   <div class='col-xs-8 col-sm-8 col-md-8 col-lg-8 well-green'>
		   <p align="center">
		   News about Global Exploration <br><br>
                   This is a collection of news and updates to the website <br><br>
		   
		   </p>
		   
			
	</div>
				
		
        
        <div class='col-xs-2 col-sm-2 col-md-2 col-lg-2'>
         
            <iframe src="http://free.timeanddate.com/clock/i64b7ixk/n33/szw110/szh110/hoc0f9/hbw3/cf100/hgr0/hwc000/fiv0/fas30/fdi72/mqv0/mhc000/mhs3/mhl20/mhw1/mhd84/mmv0/hhs1/hms1/hsc000/hss1" frameborder="0" width="110" height="110" align="right"></iframe>

        </div>
        
    </div>
	 
</body>

</html>