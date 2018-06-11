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
	<title>Login</title>

	<script
	src="https://code.jquery.com/jquery-3.1.1.min.js"
	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="../semantic/dist/semantic.min.css">

	<link rel="stylesheet" type="text/css" href="../@assets/css/login.css">
</head>
<body>
	<div class="ui middle aligned center aligned grid">
	<div class="column">
		<h2 class="ui image header">
			<a class="content" href="../">
				#DONORILMU
			</a>
		</h2>
		<form class="ui error large form" method="POST" action="../php/login.php">
			<div class="ui stacked segment">
				<div class="field">
					<div class="ui left icon input">
						<i class="user icon"></i>
						<input type="text" name="username" placeholder="Username">
					</div>
				</div>
				<div class="field">
					<div class="ui left icon input">
						<i class="lock icon"></i>
						<input type="password" name="password" placeholder="Password">
					</div>
				</div>
				<button class="ui fluid large teal submit button" type="submit">Masuk</button>
			</div>

			<div class="ui error message"><?php
				if (isset($_SESSION['errorMsg'])){
					echo $_SESSION['errorMsg'];
					unset($_SESSION['errorMsg']);
				}
			?></div>

		</form>

		<div class="ui message">
			Belum jadi donor? <a href="../register">Gabung, yuk!</a>
		</div>
	</div>
	</div>

	<script src="../semantic/dist/semantic.min.js"></script>

	<script src="../@assets/js/login.js"></script>
</body>
</html>
