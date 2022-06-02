<?php
	session_start();
	if($_SESSION['isLogin'] != true || $_SESSION['jam_selesai']==date("Y-m-d H:i:s"))
	{
		header("Location: form_login.php?message=nologin");
	}
	echo "Selamat datang, ",strtoupper($_SESSION['uname'])," login pada: ",$_SESSION['jam_mulai'];
	echo "<br>";
?>
	<a href="logout.php">Logout</a>
	<h1><a href="userform.php">Menu User</a>|<a href="barangform.php">Menu Produk</a></h1>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
</head>
<body style="background-color:#eaeaea;">
<h1>Mohon Mengisi Data Pribadi</h1>
	<form method="post" action="simpandata.php">
	<table cellspacing="0" cellpadding="10">
		<tbody>
			<td><label for="nama">Nama Lengkap:</label></td>
			<td><input type="text" name="nama" id="nama" required></td>
		</tbody>
		<tbody>
			<td><label for="uname">Username:</label></td>
			<td><?php echo $_SESSION['uname'];?></td>
		</tbody>
		<tbody>
			<td><label for="alamat">Alamat:</label></td>
			<td> <textarea name="alamat" id="alamat" cols="30" rows="5" required></textarea>	</td>
		</tbody>
		<tbody>
			<td><label for="jk">Jenis Kelamin:</label></td>
			<td>
				<input type="radio" id="lakilaki" value="Laki-laki" name="jk">
				<label for="lakilaki">Laki Laki</label>
				<input type="radio" id="perempuan" value="Perempuan" name="jk">
				<label for="perempuan">Perempuan</label>
			</td>
		</tbody>
		<tbody>
		<td><label for="hobi">Hobi:</label></td>
			<td>
				<input type="checkbox" id="basket" value="basket" name="hobi[]">
				<label for="basket">Basket</label>
				<input type="checkbox" id="futsal" value="Futsal" name="hobi[]">
				<label for="futsal">Futsal</label>
				<input type="checkbox" id="Menggambar" value="Menggambar" name="hobi[]">
				<label for="Menggambar">Menggambar</label>
			</td>
		</tbody>	
		<tbody>
			<td><label for="perkerjaan">Perkerjaan</label></td>
			<td>
				<select name="perkerjaan" id="perkerjaan">
				<option>::PILIH::</option>
				<option>Karyawan Swasta</option>
				<option>PNS</option>
				<option>Sopir</option>
				<option>Pedagang</option>
				</select>
			</td>
		</tbody>
		<tbody>
			<td><input type="submit" value="Simpan Data"></td>
		</tbody>
	</table>
	</form>

</body>
</html> -->
	