<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Barang</title>
	<link rel="stylesheet" type="text/css" href="css/tambah.css">
</head>
<body>
	<div class="container">
		<header>
			<div>STOCK BARANG PT. INDOTECH</div>
		</header>

		<nav>
			<div>
				<a href="home.php">HOME</a> | 
				<a href="#"><b>TAMBAH BARANG</b></a> | 
				<a href="update-barang.php">UPDATE BARANG</a> |
				<a href="hapus-barang.php">HAPUS BARANG</a>
			</div>
		</nav>

		<main>
			<div>
				<form method="POST" action="tambah-process.php">
					<label>Tanggal : </label>
				<br>
					<input type="date" name="tanggal">
				<br>
				<br>
					<label>Kode Barang : </label>
				<br>
					<input type="text" name="kode" placeholder="KODE BARANG" maxlength="5">
				<br>
				<br>
					<label>Nama Barang : </label>
				<br>
					<input type="text" name="nama" placeholder="NAMA BARANG">
				<br>
				<br>
					<label>Jumlah : </label>
				<br>
					<input type="number" name="jumlah">
				<br>
				<br>
				<br>
					<button type="submit" class="btnSubmit" name="submit">Submit</button>
				</form>
			</div>
		</main>
</body>
</html>