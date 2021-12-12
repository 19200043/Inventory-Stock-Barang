 <?php  
	include("class/db_connect.php");

	if(isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM users WHERE username = ? AND password =?";
		$stmt = $mysqli->prepare($sql);
		$stmt->bind_param("ss", $username, $password);
		$stmt->execute();

		$res = $stmt->get_result();
		$row = $res->fetch_assoc();

		if(!$row) {
			header("location: index.php");
		} else {
			header("location: home.php");
		}
	}
?>