<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_berita");

    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal: " . mysqli_connect_error();
        exit();
    }

    $judulberita = $_POST['judulberita'];
    $isiberita = $_POST['isiberita'];
    $penulis = $_POST['penulis'];
    $tgldipublish = $_POST['tgldipublish'];

    $query = "INSERT INTO tbl_berita (judulberita, isiberita, penulis, tgldipublish) VALUES ('$judulberita', '$isiberita', '$penulis', '$tgldipublish')";
    if (mysqli_query($koneksi, $query)) {
        echo "Data berita berhasil disimpan!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
?>
