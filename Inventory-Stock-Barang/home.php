<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
	<div class="container">
		<header>
			<div>STOCK BARANG PT. INDOTECH</div>
		</header>

		<nav>
			<div>
				<a href="#"><b>HOME</b></a> | 
				<a href="tambah-barang.php">TAMBAH BARANG</a> | 
				<a href="update-barang.php">UPDATE BARANG</a> |
				<a href="hapus-barang.php">HAPUS BARANG</a>
			</div>
		</nav>

		<main>
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
							include("class/db_connect.php");

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
	</div>
</body>
</html>