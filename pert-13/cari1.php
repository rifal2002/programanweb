<?php
echo
"<html>
<body>";
$koneksi=mysqli_connect("localhost","root","","latihan");
//mysql_select_db("lat_dbase");
$cari=$_POST['nama'];
$hasil=mysqli_query($koneksi,"select* from tabel_mahasiswa where nama like
'%$cari%'order by nama asc");
echo"<table>
<tr>
<th>NIM</th>
<th>nama</th>
<th>alamat</th>
<th>jurusan</th>
</tr>";
While($data=mysqli_fetch_array($hasil)){
    echo"<tr>
<td>".$data['nim']."</td>
<td>".$data['nama']."</td>
<td>".$data['alamat']."</td>
<td>".$data['jurusan']."</td>
</tr>
</body>
</html>";
}
?>
