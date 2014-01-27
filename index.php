<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!--<meta name="viewport" content="user-scalable=no,width=device-width" /-->
		<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
		
		<title>Glu Rooster</title>
		
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet"/>
		
		<!-- Custom styles for this template -->
		<link href="jumbotron.css" rel="stylesheet">
		
		<!-- Latest jQuery version -->
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="js/bootstrap.js"></script>

		<!-- My functions -->
				
		<!-- My javascripts -->
		<script src="js/script.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav, cake" id="navbar" role="banner">
			<div class="container">
				<div class="navbar-header">
					<a href="index.php" class="navbar-brand" >Glu Rooster</a>
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="index.php?type=student">Studenten</a>
						</li>
						<li >
							<a href="index.php?type=docent">Docenten</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>
		<div class="container" style="padding-left: 0; padding-right: 0;">
			<?php 
			if(isset($_GET['type']) && $_GET['type'] == 'student') {
				include_once "student.php";
			}
			elseif(isset($_GET['type']) && $_GET['type'] == 'docent') {
				include_once "docent.php";
			} else {
				echo "trolololololol";
			}
			?>
		</div>
	</body>
</html>