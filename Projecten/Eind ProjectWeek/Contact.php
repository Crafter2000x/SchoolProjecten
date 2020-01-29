<!doctype HTML>

<!-- Write the discription of this site -->

<html>

    <head>

        <title>
            Template
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
		
		<style>
			.form-style-6{
				font: 115% Arial, Helvetica, sans-serif;
				max-width: 800px;
				margin: 10px auto;
				padding: 16px;
				background: #F7F7F7;
			}
			.form-style-6 h1{
				background: #83f442;
				padding: 20px 0;
				font-size: 140%;
				font-weight: 300;
				text-align: center;
				color: #fff;
				margin: -16px -16px 16px -16px;
			}
			.form-style-6 input[type="text"],
			.form-style-6 input[type="date"],
			.form-style-6 input[type="datetime"],
			.form-style-6 input[type="email"],
			.form-style-6 input[type="number"],
			.form-style-6 input[type="search"],
			.form-style-6 input[type="time"],
			.form-style-6 input[type="url"],
			.form-style-6 textarea,
			.form-style-6 select 
			{
				-webkit-transition: all 0.30s ease-in-out;
				-moz-transition: all 0.30s ease-in-out;
				-ms-transition: all 0.30s ease-in-out;
				-o-transition: all 0.30s ease-in-out;
				outline: none;
				box-sizing: border-box;
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				width: 100%;
				background: #fff;
				margin-bottom: 4%;
				border: 1px solid #ccc;
				padding: 3%;
				color: #555;
				font: 95% Arial, Helvetica, sans-serif;
			}
			.form-style-6 input[type="text"]:focus,
			.form-style-6 input[type="date"]:focus,
			.form-style-6 input[type="datetime"]:focus,
			.form-style-6 input[type="email"]:focus,
			.form-style-6 input[type="number"]:focus,
			.form-style-6 input[type="search"]:focus,
			.form-style-6 input[type="time"]:focus,
			.form-style-6 input[type="url"]:focus,
			.form-style-6 textarea:focus,
			.form-style-6 select:focus
			{
				box-shadow: 0 0 5px #43D1AF;
				padding: 3%;
				border: 1px solid #43D1AF;
			}

			.form-style-6 input[type="submit"],
			.form-style-6 input[type="reset"],
			.form-style-6 input[type="button"]{
				box-sizing: border-box;
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				width: 100%;
				padding: 3%;
				background: #83f442;
				border-bottom: 2px solid #30C29E;
				border-top-style: none;
				border-right-style: none;
				border-left-style: none;    
				color: #fff;
			}
			.form-style-6 input[type="submit"]:hover,
			.form-style-6 input[type="reset"]:hover,
			.form-style-6 input[type="button"]:hover{
				background: #2EBC99;
			}

			.container {
				display: block;
				position: relative;
				padding-left: 35px;
				margin-bottom: 12px;
				cursor: pointer;
				font-size: 15px;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}

			.container input {
				position: absolute;
				opacity: 0;
				cursor: pointer;
			}

			.checkmark {
				position: absolute;
				top: 0;
				left: 0;
				height: 15px;
				width: 15px;
				background-color: #eee;
			}

			.container:hover input ~ .checkmark {
				background-color: #ccc;
			}

			.container input:checked ~ .checkmark {
				background-color: #2196F3;
			}

			.checkmark:after {
				content: "";
				position: absolute;
				display: none;
			}

			.container input:checked ~ .checkmark:after {
				display: block;
			}


			.container .checkmark:after {
				left: 4px;
				top: 3px;
				width: 3px;
				height: 8px;
				border: solid white;
				border-width: 0 3px 3px 0;
				-webkit-transform: rotate(45deg);
				-ms-transform: rotate(45deg);
				transform: rotate(45deg);
			}

			.radio {
				text-align: left;
			}
			
			#msg {
			   resize: none;
			}
		</style>
		
    </head>
 <body style="background-image: url('./images/Background.png'); padding-top: 70px; background-repeat: no-repeat; background-attachment: fixed;  background-position: center; background-size: cover;">	
<!-- ----------------------------------------------Here I start the NAV bar ------------------------------------------------------>	 
	<div class="row">
	   <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>	
		<nav class="navbar navbar-default navbar-fixed-top">
		    <!-- Brand and toggle get grouped for better mobile display -->
			<div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
		      <a class="navbar-brand" href="#"><b style="color:White; font-size: 24px; font-family: monospace;">Global Classroom</b></a></div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="topFixedNavbar1">
		      <ul class="nav navbar-nav">
		        <li><a href="index.php"><b style="color:White; font-size: 18px; font-family: monospace;">Home<span class="sr-only">(current)</span></b></a></li>
		        <li></li>
		        <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b style="color:White; font-size: 18px; font-family: monospace;">Info and contact<span class="caret"></span></b></a>
		          <ul  class="dropdown-menu">
		            <li class="active"><a href="Contact.php">Contact Form</a></li>
		            <li><a href="Bug.php">Bug Report </a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="Info.php">Info</a></li>
	              </ul>
	            </li>
				  
				  
				 <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b style="color:White; font-size: 18px; font-family: monospace;">WIP<span class="caret"></span></b></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Page 2.1</a></li>
		            <li><a href="#">Page 2.2</a></li>
		            <li><a href="#">Page 2.3</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Page 2.4</a></li>
	              </ul>
	            </li>
	          </ul>
				
		   <ul class="nav navbar-nav navbar-right">
              <li><button style="margin-right: 10px;" class="btn btn-danger navbar-btn"><a href="login.php"><b style="color:White; font-size: 15px; font-family: monospace;">Create Account / Login</b></a></button></li>
           </ul>
	        </div>
		    <!-- /.navbar-collapse -->
	      </div>
		  <!-- /.container-fluid -->
		  </nav>
		   
		  </div>
   </div> 
<!-------------------------------------- After this the NAV have part of the page is done ---------------------------------------->
   <div class="row">
	   <div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>
		   <!-- to do write sheit-->
		   <center>
			<div class="form-style-6">
			<h1>Contact Us</h1>
			<!-- use form method post to submit the form -->
			<form method="POST">
			<!-- Input fields with a specific name -->
			<input type="text" name="snamefield" placeholder="Sirname" />
			<input type="text" name="slastnamefield" placeholder="Lastname" />
			<input type="text" name="susername" placeholder="Username" />
			<input type="email" name="semailfield" placeholder="Email Adress" />
			<br>
			<textarea id="msg" name="sfieldquestions" placeholder="Your Message"></textarea>
			<br>
			<input type="submit" value="Send" />
			<br>
			<input type="reset" Value="Reset">
			<br>
			<!-- On click he will execute the script -->
			<input type="button" Value="Back" onclick="back()">
			<!-- Script to go back to the main page -->
			<script>
			function back() {
				location.href='#';
			}
			</script>
			</form>
			</div>
			</center>
	   </div>
   </div>
	 
</body>

</html>