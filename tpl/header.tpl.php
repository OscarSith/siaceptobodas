<?php
session_start();
$path = explode('/', $_SERVER['PHP_SELF']);
$path = array_pop($path);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Oscar Larriega <larriega@gmail.com>">
	<title>Siaceptobodas</title>

	<link rel="shortcut icon" type="image/ico" href="favicon.ico">
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<header class="container">
			<div class="row">
				<div class="col-sm-3">
					<a href="/" class="logo">
						<img src="assets/images/logo.jpg" class="img-responsive">
					</a>
				</div>
				<div class="col-sm-7 no-padding">
					<nav>
						<ul class="nav nav-pills nav-justified">
							<li><a href="index.php" class="<?= ($path == 'index.php' || $path == '') ? 'active-nav' : '' ?>">INICIO</a></li>
							<li><a href="nosotros.php" class="<?= ($path == 'nosotros.php' || $path == '') ? 'active-nav' : '' ?>">NOSOTROS</a></li>
							<li><a href="servicios.php" class="<?= ($path == 'servicios.php') ? 'active-nav' : '' ?>">SERVICIOS</a></li>
							<!-- <li><a href="testimonio.php" class="<?= ($path == 'testimonio.php') ? 'active-nav' : '' ?>">TESTIMONIOS</a></li> -->
							<li><a href="cotizacion.php" class="<?= ($path == 'cotizacion.php') ? 'active-nav' : '' ?>">COTIZACIÓN</a></li>
							<li><a href="contacto.php" class="<?= ($path == 'contacto.php') ? 'active-nav' : '' ?>">CONTACTO</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-sm-2">
					<ul class="list-unstyled nav-socials">
						<li>
							<a href="https://www.facebook.com/synergycelebracionescorporativas" target="_blank"><i class="fa fa-facebook-square fa-lg"></i></a>
						</li>
						<li class="social-middle">
							<a href="#"><i class="fa fa-twitter fa-lg"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-youtube-play fa-lg"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</header>