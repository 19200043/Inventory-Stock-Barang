<?php  
	include("class/db_connect.php");

	if(isset($_POST['submit'])) {
		$kode = $_POST['kode'];
		

		if($_POST['nama'] != "" && $_POST['jumlah'] != "") {
			$nama = $_POST['nama'];
			$jumlah = $_POST['jumlah'];

			$sql = "UPDATE data_brg_masuk SET nama_barang = ?, jumlah = ? WHERE kode_barang = ?";
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param("sis", $nama, $jumlah, $kode);
			$stmt->execute();
		} else if($_POST['nama'] != "" && $_POST['jumlah'] == "") {
			$nama = $_POST['nama'];

			$sql = "UPDATE data_brg_masuk SET nama_barang = ? WHERE kode_barang = ?";
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param("ss", $nama, $kode);
			$stmt->execute();
		} else if ($_POST['nama'] == "" && $_POST['jumlah'] != "") {
			$jumlah = $_POST['jumlah'];

			$sql = "UPDATE data_brg_masuk SET jumlah = ? WHERE kode_barang = ?";
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param("is", $jumlah, $kode);
			$stmt->execute();
		}

		header("location: home.php");
	}
?>
