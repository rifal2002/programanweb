<!DOCTYPE html>
<?php 
      include 'koneksi.php';
      $id_siswa ='';
      $nisn = '';
      $nama_siswa = '';
      $jenis_kelamin = '';
      $alamat = '';

      if(isset($_GET['ubah'])){
        $id_siswa = $_GET['ubah'];

        $query = "SELECT * FROM tbl_siswa WHERE id_siswa = '$id_siswa';";
        $sql = mysqli_query($conn, $query);

        $result = mysqli_fetch_assoc($sql);

        $nisn = $result['nisn'];
        $nama_siswa = $result['nama_siswa'];
        $jenis_kelamin = $result['jenis_kelamin'];
        $alamat = $result['alamat'];

      }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" ></script>
    <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="fontawesome/css/custom-icons.css" rel="stylesheet"/>
  <link href="fontawesome/css/sharp-solid.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary mb-4">
        <div class="container">
          <a class="navbar-brand" href="#">
          Tugas Akhir Program (Rifal Andreansyah)
          </a>
        </div>
      </nav>

      <div class="container">
        <form method="POST" action="proses.php" enctype="multipart/form-data" >
          <input type="hidden" value="<?php echo $id_siswa; ?>" name="id_siswa">
        <div class="mb-3 row">
            <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
            <div class="col-sm-10">
              <input type="text" name="nisn" class="form-control" id="nisn" placeholder="Masukan NISN Anda" value="<?php echo $nisn; ?>">
            </div>
          </div>
      </div>

      <div class="container">
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
            <div class="col-sm-10">
              <input type="text" name="nama_siswa" class="form-control" id="nama" placeholder="Masukan nama Anda" value=" <?php echo $nama_siswa; ?>">
            </div>
          </div>
      </div>

      <div class="container">
        <div class="mb-3 row">
            <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <select id="jeniskelamin" name="jenis_kelamin" class="form-select" value="<?php echo $jenis_kelamin; ?>">
                    <option selected>Jenis Kelamin</option>
                    <option <?php if($jenis_kelamin == 'Laki-laki'){ echo"selected";} ?> value="Laki-laki">Laki-laki</option>
                    <option <?php if($jenis_kelamin == 'Prempuan'){ echo"selected";} ?> value="Prempuan">Prempuan</option>
                  </select>
            </div>
          </div>
      </div>

      <div class="container">
        <div class="mb-3 row">
            <label for="foto" class="col-sm-2 col-form-label">Foto Siswa</label>
            <div class="col-sm-10">
                <input <?php if(!isset($_GET['ubah'])){ echo "required"; } ?> class="form-control" name="foto" type="file" id="foto">
            </div>
          </div>
      </div>

      <div class="container">
        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat </label>
            <div class="col-sm-10">
                <textarea class="form-control" name="alamat" id="alamat" rows="3"><?php echo $alamat; ?></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <div class="rol">
              <?php 
                if(isset($_GET['ubah'])){
                  ?>
                  <button type="submit" name="aksi" value="edit" class="btn btn-primary">Tambah</button>
              <?php
                } else{
                ?>
                <button type="submit" name="aksi" value="add" class="btn btn-primary">Tambahkan</button>
              <?php 
                }
              ?>

                <a href="index.php" type="button" class="btn btn-danger">Batal</a>
            </div>
          </div>
        </form>
      </div>
</body>
</html>