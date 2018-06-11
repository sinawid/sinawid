<?php
	session_start();
	if (isset($_SESSION['username'])){
		header('location: ..');
	}
?>
<!DOCTYPE html>
<html lang="id">
<head>
	<!-- Standard Meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- <link rel="image_src" type="image/jpeg" href="/images/logo.png" /> -->

	<!-- Site Properities -->
	<title>Register</title>

	<script
	src="https://code.jquery.com/jquery-3.1.1.min.js"
	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="../semantic/dist/semantic.min.css">

	<link rel="stylesheet" type="text/css" href="../@assets/css/register.css">
</head>
<body>
	<div class="ui middle aligned center aligned grid">
		<div class="column">
			<h2 class="ui image header">
				<a class="content" href="../">
					#DONORILMU
				</a>
			</h2>

			<form class="ui error form segment" method="POST" action="../php/register.php">
			  <div class="ui error message"><?php if (isset($_SESSION['errorMsg']))
						echo $_SESSION['errorMsg'];
						unset($_SESSION['errorMsg'])
					?></div>
			  <div class="two fields">
			    <div class="field">
			      <label>Nama Depan</label>
			      <input placeholder="First Name" type="text" name="firstname">
			    </div>
			    <div class="field">
			      <label>Nama Belakang</label>
			      <input placeholder="Last Name" type="text" name="lastname">
			    </div>
			  </div>
				<div class="field">
					<label>Email</label>
					<input type="text" name="email" placeholder="Alamat email">
				</div>
			  <div class="field">
			    <label>Username</label>
			    <input placeholder="Username" type="text" name="username">
			  </div>
			  <div class="field">
			    <label>Password</label>
			    <input placeholder="Password" type="password" name="password_1">
			  </div>
				<div class="field">
			    <label>Ulangi Password</label>
			    <input placeholder="Retype password" type="password" name="password_2">
			  </div>
			  <div class="inline field">
			    <div class="ui checkbox">
			      <input type="checkbox">
			      <label>Saya setuju dengan <a href="#">Syarat & Ketentuan.</a> </label>
			    </div>
			  </div>
			  <button class="ui blue submit button fluid" type="submit">Submit</button>
			</form>
			<div class="ui message">
				Sudah terdaftar? <a href="../login">Klik untuk masuk!</a>
			</div>
		</div>
	</div>

	<div class="ui footer middle aligned center aligned grid">
		<p>DonorIlmu @2018</p>
	</div>

	<script src="../semantic/dist/semantic.min.js"></script>

	<script src="../@assets/js/register.js"></script>
</body>
</html>