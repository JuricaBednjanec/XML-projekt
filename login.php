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


</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image:url(images/bg-01.jpg);">

				</div>

				<form class="login100-form validate-form" action="" method="POST">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Korisničko ime</span>
						<input class="input100" type="text" name="username" id="username" placeholder="Unesite korisničko ime">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Lozinka</span>
						<input class="input100" type="password" name="password" id="password" placeholder="Unesite lozinku">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
            <div>
							<p style="color:#b50808">
								<?php
								session_start();

								$username = "";
								$password = "";

								if ($_SERVER["REQUEST_METHOD"] == "POST") {

									$ans = $_POST;

									if (empty($ans["username"])) {
										echo "Korisnicki račun nije unesen.";
									} else if (empty($ans["password"])) {
										echo "Lozinka nije unesena.";
									} else {
										$username = $ans["username"];
										$password = $ans["password"];

										provjera($username, $password);
									}
								}

								function provjera($username, $password)
								{


									$filename = 'korisnici.json';

									$data = file_get_contents($filename);
									$users = json_decode($data);


									foreach ($users as $user) {
										$usrn = $user->username;
										$usrp = $user->password;
										$usrime = $user->ime;
										$usrprezime = $user->prezime;
										if ($usrn == $username) {
											if ($usrp == $password) {
												$_SESSION["ime"]= $usrime;
												$_SESSION["prezime"]= $usrprezime;
												header("Location: main.php");
												return;
											} else {
												echo "Netocna lozinka";
												return;
											}
										}
									}

									echo "Korisnik ne postoji.";
									return;
								}
								?>
						</p>
    				</div>
						<div>
							<a href="register.php" class="txt1">
								Registracija
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">

            <input class="login100-form-btn" type="submit" name="submit" value="Prijavi se">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
