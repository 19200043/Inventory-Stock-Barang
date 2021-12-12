<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Barang</title>
	<link rel="stylesheet" type="text/css" href="css/hapus.css">
</head>
<body>
	<div class="container">
		<header>
			<div>STOCK BARANG PT. INDOTECH</div>
		</header>

		<nav>
			<div>
				<a href="home.php">HOME</a> | 
				<a href="tambah-barang.php">TAMBAH BARANG</a> | 
				<a href="update-barang.php">UPDATE BARANG</a> |
				<a href="#"><b>HAPUS BARANG</b></a>
			</div>
		</nav>

		<main>
			<form method="POST" action="hapus-process.php">
					<label>Kode Barang : </label>
				<br>
					<select name="kode">
						<?php  
							include("class/db_connect.php");

						    $sql = "SELECT * FROM data_brg_masuk";
							$stmt = $mysqli->prepare($sql);
							$stmt->execute();

							$res = $stmt->get_result();

							while($row = $res->fetch_assoc()) {
								echo "<option value=".$row['kode_barang'].">".$row['kode_barang']."</option>";
							}
						?>
					</select>
				<br>
				<br>
				<br>
					<button type="submit" class="btnSubmit" name="submit">Submit</button>
			</form>

			<div class="data">
				<table>
					<thead>
						<tr>
							<th>TANGGAL MASUK</th>
							<th>KODE BARANG</th>
							<th>NAMA BARANG</th>
							<th>JUMLAH BARANG</th>
						</tr>
					</thead>

					<tbody>
						<?php  
							$mysqli = new mysqli("localhost", "root", "", "data_barang");

							if($mysqli->connect_errno){
						        echo "Failed to connect to MySQL : ". $mysqli;
						    }

						    $sql = "SELECT * FROM data_brg_masuk";
							$stmt = $mysqli->prepare($sql);
							$stmt->execute();

							$res = $stmt->get_result();

							while($row = $res->fetch_assoc()) {
								echo "<tr>";
									echo "<td>".$row['tanggal']."</td>";
									echo "<td>".$row['kode_barang']."</td>";
									echo "<td>".$row['nama_barang']."</td>";
									echo "<td>".$row['jumlah']."</td>";
								echo "</tr>";
							}
						?>
					</tbody>
				</table>
			</div>
		</main>
</body>
</html>