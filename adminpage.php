<!DOCTYPE html>
<html>
	<head>
	  <title>Halaman Admin</title>
	  <link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<style>
	u {
	  background-color: #000000; /* Green */
	  border: none;
	  color: white;
	  padding: 15px 32px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;
	}
	form{
	  text-align: center;
	}
	</style>
<body>
	<div id="profile">
	  <b id="welcome">Selamat Datang : <i>Admin <!--  NAMA DARI DATABASE --> </i></b>
	  <b id="logout"><a href="#">Log Out</a></b>
	</div>

	<form action="insert.php" method="post">
		<input type="submit" value="Tambah Data" />
	</form>

	<form action="delete.php" method="post">
		<input type="submit" value="Hapus Data" />
	</form>

	<form action="select.php" method="post">
		<input type="submit" value="Lihat Database" />
	</form>
</body>
</html>
