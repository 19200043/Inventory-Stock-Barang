<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Request Password</title>
	<link rel="stylesheet" type="text/css" href="css/request.css">
</head>
<body>
	<div class="container">
		<?php  
			include("class/db_connect.php");

			if(isset($_POST['username'])) {
				$username = $_POST['username'];

				$sql = "SELECT password FROM users WHERE username = ?";
				$stmt = $mysqli->prepare($sql);
				$stmt->bind_param("s", $username);
				$stmt->execute();

				$res = $stmt->get_result();
				$row = $res->fetch_assoc();

				if($row['password'] != "") {
					$password = $row['password'];

					echo "<div>Password Anda : $password</div>";
				} else {
					echo "<div>Username tersebut tidak tersedia!</div>";
				}

				echo "<br><br>";

				echo "<form method='POST' action='index.php'>
						<div>
							<button type='submit' id='btnLogin'>LOGIN SEKARANG</button>
						</div>
					</form>";
			}
		?>
	</div>
</body>
</html>
