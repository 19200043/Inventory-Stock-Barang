<?php  
	include("class/db_connect.php");

	if(isset($_POST['submit'])) {
		$kode = $_POST['kode'];

		$sql = "DELETE FROM data_brg_masuk WHERE kode_barang = ?";
		$stmt = $mysqli->prepare($sql);
		$stmt->bind_param("s", $kode);
		$stmt->execute();

		header("location: home.php");
	}
?>