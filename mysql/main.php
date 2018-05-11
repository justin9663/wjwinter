<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Secret Diary - Main Page</title>
    <!-- Bootstrap -->
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/indexStyles.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
  <div class="navbar navbar-default navbar-fixed-top">
  	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand">Secret Diary</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php">Home</a></li>
			</ul>
			<form class="navbar-form navbar-right" method="post">
				<div class="form-group">
					<label for="email">Email Address</label>
					<input type="email" name="loginEmail" placeholder="Email" class="form-control" 
						value="<?php echo addslashes($_POST['loginEmail']); ?>" />
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="loginPassword" placeholder="Password" class="form-control" />
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="Log In" class="btn btn-success" />
				</div>
			</form>
		</div>
	</div>
  </div>
  <div class="container" id="topContainer">
  	<div class="container">
		<div class="row">
  		<div class="jumbotron jumboTransparency">
			<!-- Content-->
                <h1>Register</h1>
                <p class="lead">Welcome to Aliera Accounting and Real Estate</p>
                
                <?php
                
                if ($error) {
                    
                    echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
                    
                }
                
                ?>
                
                <p class="margin-top"><strong>Join our mailing list!</strong></p>
                <form method="post">
                
                    <div class="form-group">
                        <input class="form-control" type="email" name="signUpEmail" id="signUpEmail" placeholder="Email Address" 
                            value="<?php echo addslashes($_POST['signUpEmail']); ?>">
                        <input class="form-control margin-top" type="password" name="signUpPassword" id="signUpPassword" placeholder="Password">
                        <input class="btn btn-success margin-top" type="submit" name="submit" id="btn_submit" value="Sign Up">
                        <!--<button type="submit" name="Submit" id="btn_submit">Submit Form</button>-->
                    </div>
                </form>
		</div>
		</div>
	</div>
  </div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../js/jquery-1.11.2.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="../js/bootstrap.js"></script>
	<script>
	
		$("#topContainer").css("min-height", $(window).height());
	
	</script>
  </body>
</html>