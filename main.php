<!DOCTYPE html>
<html lang="en">
<head>
	<title>mojTVZ.hr</title>
	<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style>

	</style>
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image:url(images/bg-01.jpg);">

				</div>

				<h1 style="text-align: center; margin: 0 auto;margin-bottom:50px;margin-top:50px;">Dobrodošli
					<?php
				session_start();
				echo $_SESSION["ime"]." ".$_SESSION["prezime"];

				?>
			</h1>

			<div class="container-login100-form-btn">

				<a href="login.php" style="text-align: center; margin: 0 auto;margin-bottom:50px;margin-top:10px;">	<button class="login100-form-btn" type="button">
					Odjavi se
				</button></a>
			</div>

			</div>
		</div>
	</div>
</body>
</html>
