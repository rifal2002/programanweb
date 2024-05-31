<?php
// Koneksi ke database
include 'koneksi.php';
?>
<html>
<body>
<h2>Tabel 1</h2>
<table>
<tr>
<th>kode</th>
<th>nama barang</th>
<th>jumlah</th>
</tr>

<?php
// Query untuk menampilkan data dari tabel1
$tabel1 = mysqli_query($koneksi, "SELECT * FROM tabel_1");
while ($dataku = mysqli_fetch_assoc($tabel1)) {
    echo "<tr>
    <td>{$dataku['kode']}</td>
    <td>{$dataku['nama_barang']}</td>
    <td>{$dataku['jumlah']}</td>
    </tr>";
}
?>
</table>

<h2>Tabel 2</h2>
<table>
<tr>
<th>kode</th>
<th>nama barang</th>
<th>jumlah</th>
</tr>

<?php
// Query untuk menampilkan data dari tabel2
$tabel2 = mysqli_query($koneksi, "SELECT * FROM tabel_2");
while ($data2 = mysqli_fetch_assoc($tabel2)) {
    echo "<tr>
    <td>{$data2['kode']}</td>
    <td>{$data2['nama_barang']}</td>
    <td>{$data2['jumlah']}</td>
    </tr>";
}
?>
</table>

<h2>kirim barang</h2>
<form action="aksi_form.php" method="post">
<label>kode barang :</label>
<select name="kode">
<?php
// Query untuk menampilkan pilihan kode barang dari tabel2
$tabel2 = mysqli_query($koneksi, "SELECT * FROM tabel_2");
while ($data1 = mysqli_fetch_assoc($tabel2)) {
    echo '<option value="'.$data1['kode'].'">'.$data1['kode'].'/'.$data1['nama_barang'].'</option>';
}
?>
</select><br><br>
<label>jumlah:</label><input type="number" name="jumlah"><br><br>
<input type="submit" value="kirim">
</form>
</body>
</html>