<?php  
	include("class/db_connect.php");

	if(isset($_POST['submit'])) {
		$tanggal = $_POST['tanggal'];
		$kode = $_POST['kode'];
		$nama = $_POST['nama'];
		$jumlah = $_POST['jumlah'];

		$sql = "INSERT INTO data_brg_masuk(tanggal, kode_barang, nama_barang, jumlah) VALUES (?,?,?,?)";
		$stmt = $mysqli->prepare($sql);
		$stmt->bind_param("sssi", $tanggal, $kode, $nama, $jumlah);
		$stmt->execute();

		header("location: home.php");
	}
?>