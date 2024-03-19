<?php
$nama=$_POST['nama'];
$jurusan=$_POST['jurusan'];
$tugas=$_POST['tugas'];
$uts=$_POST['uts'];
$uas=$_POST['uas'];
// Nilai
$tugas =80;
$uts =75;
$uas =85;

//hitungan rata-rata
$rata = $tugas + $uts + $uas / 3;



//Tampilan hasilnya
echo "Nama : $nama <br>";
echo "Jurusan : $jurusan <br>";
echo "Nilai Tugas : $tugas <br>";
echo "Nilai UTS : $uts <br>";
echo "Nilai UAS : $uas <br>";
echo "Rata-rata : $rata <br>";
?>