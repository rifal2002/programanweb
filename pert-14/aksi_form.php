<?php
// Koneksi dengan basis data
include 'koneksi.php';

// Menampung data yang dikirim oleh form
$kode = $_POST['kode'];
$jumlah = $_POST['jumlah'];

// Memasukkan data ke database
$query = "CALL update_datatable('$kode', '$jumlah')";
$result = mysqli_query($koneksi, $query);

// Memeriksa apakah data berhasil dimasukkan
if ($result) {
    echo "Data berhasil dimasukkan.";
} else {
    echo "Error: " . mysqli_error($koneksi);
}
// Mengalihkan halaman kembali ke form.php
header("location:form.php");
?>