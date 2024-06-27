<?php 
  include 'koneksi.php';

  $query ="SELECT * FROM tbl_siswa;";
  $sql = mysqli_query($conn, $query );
  $no = 0;
?>
<!DOCTYPE html>
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
    <nav class="navbar bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">
            Tugas Akhir Program (Rifal Andreansyah)
          </a>
        </div>
      </nav>

      <div class="container">
        <h1 class="mt-4">Data Murid</h1>
        <figure>
            <blockquote class="blockquote">
              <p>Berisi data</p>
            </blockquote>
          </figure>

          <a href="kelola.php " type="button" class="btn btn-secondary mb-3">
            <i class="fa fa-plus"></i>
            Tambah Data</a>
          
            <a href="logout.php" type="button" class="btn btn-info mb-3" >
            <i class="fa-solid fa-right-from-bracket"></i>
              Logout</a>

          <div class="table-responsive">
            <table class="table align-middle table-bordered table-hover">
                <thead>
                  <tr>
                    <th><center>No</center></th>
                    <th scope="col">NISN</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Foto Siswa </th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Ubah</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while($result = mysqli_fetch_assoc($sql)){
                  ?>
                    <tr>
                      <td><center>
                        <?php echo ++$no; ?></center>
                      </td>
                      <td><?php echo $result['nisn']; ?></td>
                      <td><?php echo $result['nama_siswa']; ?></td>
                      <td><?php echo $result['jenis_kelamin']; ?></td>
                      <td><img src="img/<?php echo $result['foto_siswa']; ?>" style="width: 100px;"></td>
                      <td><?php echo $result['alamat']; ?></td>
                      <td>
                        <a href="kelola.php?ubah=<?php echo $result['id_siswa']; ?>" type="button" class="btn btn-success btn-sm">
                            Ubah</a>
                            <a href="proses.php?hapus=<?php echo $result['id_siswa'];?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('yakin untuk menghapus?')" > Hapus</a>
                      </td>
                    </tr>
                  <?php 
                    }
                  ?>
                </tbody>
                </table>
          </div>
      </div>
</body>
</html>