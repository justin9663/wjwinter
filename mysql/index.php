<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MySQL Database</title>
    <!-- Bootstrap -->
	<link href="../css/bootstrap.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			#greeting{
				color:#620506;
			}
			#blah{
				text-align:center;
			}
		</style>
  </head>
  
  <body>
    <div class="navbar navbar-inverse">
  	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand">Justin Winter</a>
		</div>
		<div class="collapse navbar-collapse">
			<div class="nav navbar-nav">
				<li><a href="../index.php">Home</a></li>
				<li><a href="../php/weather.php">Weather Forecaster</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="">Portfolio</a></li>
				<li><a href="">Resum&eacute;</a></li>
                <li class="dropdown">
                	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    	aria-expanded="false">Projects<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../JavaScript/index.html">JS</a></li>
                        <li><a href="../jQuery/index.html">jQuery</a></li>
                        <li><a href="../Bootstrap/index.html">BootStrap</a></li>
                        <li><a href="#">WordPress</a></li>
                    	<li><a href="../mysql/index.php">MySQL</a></li>
                    </ul>
                </li>
                	
			</div>
		</div>
	</div>
  </div>
  <div class="container">
  <div class="jumbotron">
<?php

	// Hashes
	
	/*$pass = "Alekiemik3$";
	
	$salt = "234dfg346sdf347gh346sdf235asdf456sdfg546";
	
	$saltPass = md5($salt.$pass);
	
	echo $saltPass;
	echo "<br>";
	echo md5($salt."Alekiemik3$"); 
	echo "<br>";
	
	echo md5(md5($row["id"])."Alekiemik3$");
	
	echo "<br>";
	
	echo md5(md5($row["id"]).$saltPass);

*/
	//Set cookies (name, value, duration)
	//setcookie("id", "1234", time()+60*60*24);
	
	//Remove cookie by removing value and setting duration in the past
	//setcookie("id", "", time()-3600);
	//Display cookie
	//echo $_COOKIE["id"];

	//Start a session. The session variable will be available to all webpages on the server
	/*session_start();
	$_SESSION['loginId']=1;
	echo $_SESSION['loginid']=1;*/
?><br >

<form action="diary.php">
 <input type="submit" value="Diary" class="btn btn-default">
</form>

</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../js/jquery-1.11.2.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="../js/bootstrap.js"></script>
  </body>
</html>