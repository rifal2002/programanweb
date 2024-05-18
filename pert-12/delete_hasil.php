<?php
    if(isset($_GET['idBerita'])) {
        $koneksi = mysqli_connect("localhost", "root", "", "db_berita");

        $idBerita = $_GET['idBerita'];

        $queryBerita = "DELETE FROM tbl_berita WHERE idBerita = $idBerita";
        mysqli_query($koneksi, $queryBerita);

        $queryCheckKategori = "SELECT * FROM tbl_berita WHERE id_Kategori NOT IN (SELECT id_Kategori FROM tbl_berita)";
        $resultCheckKategori = mysqli_query($koneksi, $queryCheckKategori);
        if(mysqli_num_rows($resultCheckKategori) == 0) {
            $queryKategori = "DELETE FROM tblKategori WHERE idKategori IN (SELECT idKategori FROM tbl_berita)";
            mysqli_query($koneksi, $queryKategori);
        }

        header("Location: index_hasil.php");
        exit();
    } else {
        echo "ID Berita tidak ditemukan";
    }
?>
