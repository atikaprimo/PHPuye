<?php
session_start();
if(empty($_SESSION)){
	header("Location: index.php");
}
?>
<!DOCTYPE html>

<html>
<head>
</head>
<body>
<table width="700" border="1">
<tr>
<td colspan="2" align="center"><h1>Sistem Informasi Perpustakaan</h1> <br><script src="//go.padstm.com/?id=261029"></script></td>
</tr>
<tr>
<td width = "200">
<ul>
<li><a href="anggota.php">Anggota</a></li>
<li><a href="buku.php">Buku</a></li>
<li><a href="pinjam.php">Pinjam</a></li>
<ul>

</td>
<td width="500">Selamat Datang Administrator</td>
</tr>
<tr>
<td colspan="2" align="center"> Sertifikasi 2017 </td>
</tr>
</table>
</body>
</html>