<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lupa Password</title>
	<link rel="stylesheet" type="text/css" href="css/password-request.css">
</head>
<body>
	<div class="container">
		<header>
			<div>LUPA PASSWORD?</div>
		</header>

		<main>
			<form method="POST" action="request.php">
				<div>
					<input type="text" class="txtUsername" name="username" placeholder="Masukkan Username">
				</div>

				<div>
					<button type="submit" id="btnCek">Cek Password</button>
				</div>
			</form>

			<form method="POST" action="index.php">
				<div>
					<button type="submit" id="btnLogin">LOGIN SEKARANG</button>
				</div>
			</form>
		</main>
	</div>
</body>
</html>