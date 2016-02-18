<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Flower shop Project</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
</head>
<body>
	<div class="container">

		<!-- Header -->
		<div class="jumbotron">

			<h2 id="storename"> <img id="logo" alt="logo" src="img/logo.png"/> The Flower</h2>

		</div>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="homepage.php">Flower shop name</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="valentine.php">Valentine <span class="sr-only">(current)</span></a></li>
						<li><a href="#">Popular</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>


					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><?php if(isset($_SESSION['username'])) echo "Hi ".$_SESSION['username']; ?></a></li>
						<li><a href="login.php">Log in</a></li>
						<li><a href="signup.php">Sign up</a></li>
						<li><a href="logout.php">Log out</a></li>
						
					</ul>


				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>