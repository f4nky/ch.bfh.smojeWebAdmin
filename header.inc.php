<?php
require_once('config.php');

if (isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 'home';
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<header>
			<nav class="navbar navbar-default" role="navigation">
				<div class="wrapper">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="#"><div class="logo"></div></a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul id="navbar" class="nav navbar-nav">
							<li class="<?= ($page == 'home') ? 'active' : ''; ?>"><a title="Home" href="index.php?page=home">Home</a></li>
							<li class="<?= ($page == 'new') ? 'active' : ''; ?>"><a title="New" href="index.php?page=new">Neue Smoje</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>