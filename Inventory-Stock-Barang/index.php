<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="container">
		<header>
			<div>USER LOGIN</div>
		</header>

		<main>
			<form method="POST" action="login-process.php">
				<div>
					<input type="text" class="txtUserInput" name="username" placeholder="USERNAME">
				</div>

				<div>
					<input type="text" class="txtUserInput" name="password" placeholder="PASSWORD">
				</div>

				<div>
					<button type="submit" id="btnLogin">LOGIN</button>
				</div>
			</form>

			<form method="POST" action="password-request.php">
				<div>
					<button type="submit" id="btnLupaPass">LUPA PASSWORD?</button>
				</div>
			</form>
		</main>
	</div>
</body>
</html>