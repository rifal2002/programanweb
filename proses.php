<?php 
    include 'koneksi.php';
    if (isset($_POST['aksi'])){
        if ($_POST['aksi'] == "add"){

            $nisn = $_POST['nisn'];
            $nama_siswa = $_POST['nama_siswa'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $foto = $_FILES['foto']['name'];
            $alamat = $_POST['alamat'];

            $dir = "img/";
            $tmpFile = $_FILES['foto']['tmp_name'];

            move_uploaded_file($tmpFile, $dir.$foto);

            $query ="INSERT INTO tbl_siswa VALUES(null, '$nisn', '$nama_siswa', '$jenis_kelamin', '$foto', '$alamat' )";
            $sql = mysqli_query($conn, $query);

            if ($sql){
                header("location: index.php");
            } else {
                echo $query;
            }
        } else if($_POST['aksi'] == "edit"){
           // echo "Edit Data <a href='index.php'>[Home]</a>";

            $id_siswa = $_POST['id_siswa'];
            $nisn = $_POST['nisn'];
            $nama_siswa = $_POST['nama_siswa'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $alamat = $_POST['alamat'];

            $queryShow = "SELECT * FROM tbl_siswa WHERE id_siswa = '$id_siswa';";
            $sqlShow = mysqli_query($conn, $queryShow);
            $result = mysqli_fetch_assoc($sqlShow);

            if($_FILES['foto'] ['name'] == "" ){
                $foto = $result['foto_siswa'];
            } else {
                $foto = $result['foto']['name'];
                unlink("img/".$result['foto_siswa']);
                move_uploaded_file($_FILES['foto']['tmp_name'], 'img/'.$_FILES['foto']['name']);
            }
            
            $query = "UPDATE tbl_siswa SET nisn='$nisn', nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin', alamat='$alamat', foto_siswa='$foto' WHERE id_siswa='$id_siswa';";
            $sql = mysqli_query($conn, $query);
            header("location: index.php");
        }
    }


   if (isset($_GET['hapus'])){
    $id_siswa = $_GET['hapus'];

    $queryShow = "SELECT * FROM tbl_siswa WHERE id_siswa = '$id_siswa';";
    $sqlShow = mysqli_query($conn, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    var_dump($result);
    unlink ("img/".$result['foto_siswa']);

    $query = "DELETE FROM tbl_siswa WHERE id_siswa = '$id_siswa';";
    $sql = mysqli_query($conn, $query);
    if ($sql){
                header("location: index.php");
            } else {
                echo $query;
            }
   }
?>