<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Akademik</title>
</head>
<body>
    <h2>Form Input Nilai Akademik</h2>
    <form method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br>
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" required><br>
        <label for="matakuliah">Mata Kuliah:</label><br>
        <input type="text" id="matakuliah" name="matakuliah" required><br>
        <label for="kehadiran">Jumlah Kehadiran:</label><br>
        <input type="number" id="kehadiran" name="kehadiran" min="0" max="18" required><br>
        <label for="tugas">Nilai Tugas:</label><br>
        <input type="number" id="tugas" name="tugas" min="0" max="100" required><br>
        <label for="uts">Nilai UTS:</label><br>
        <input type="number" id="uts" name="uts" min="0" max="100" required><br>
        <label for="uas">Nilai UAS:</label><br>
        <input type="number" id="uas" name="uas" min="0" max="100" required><br><br>
        <input type="submit" name="submit" value="Hitung Nilai">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $matakuliah = $_POST['matakuliah'];
        $kehadiran = $_POST['kehadiran'];
        $tugas = $_POST['tugas'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];

        // Fungsi untuk menghitung nilai akhir
        function hitungNilaiAkhir($kehadiran, $tugas, $uts, $uas) {
            $bobotKehadiran = 0.10;
            $bobotTugas = 0.20;
            $bobotUTS = 0.30;
            $bobotUAS = 0.40;

            // Validasi jumlah kehadiran maksimal 18
            $kehadiran = min($kehadiran, 18);

            $nilaiAkhir = ($bobotKehadiran * ($kehadiran / 18) * 100) +
                          ($bobotTugas * $tugas) +
                          ($bobotUTS * $uts) +
                          ($bobotUAS * $uas);
            
            return $nilaiAkhir;
        }

        // Fungsi untuk menentukan grade
        function tentukanGrade($nilaiAkhir) {
            if ($nilaiAkhir >= 80) {
                return "A";
            } elseif ($nilaiAkhir >= 70) {
                return "B";
            } elseif ($nilaiAkhir >= 60) {
                return "C";
            } elseif ($nilaiAkhir >= 50) {
                return "D";
            } else {
                return "E";
            }
        }

        // Fungsi untuk menentukan keterangan lulus/tidak lulus
        function tentukanKeterangan($nilaiAkhir) {
            if ($nilaiAkhir > 65) {
                return "Lulus";
            } else {
                return "Tidak Lulus";
            }
        }

        // Hitung nilai akhir
        $nilaiAkhir = hitungNilaiAkhir($kehadiran, $tugas, $uts, $uas);

        // Tentukan grade
        $grade = tentukanGrade($nilaiAkhir);

        // Tentukan keterangan lulus/tidak lulus
        $keterangan = tentukanKeterangan($nilaiAkhir);

        // Tampilkan hasil
        echo "<h2>Nilai Akademik</h2>";
        echo "<p>Nama: $nama</p>";
        echo "<p>NIM: $nim</p>";
        echo "<p>Mata Kuliah: $matakuliah</p>";
        echo "<p>Jumlah Kehadiran: $kehadiran</p>";
        echo "<p>Nilai Tugas: $tugas</p>";
        echo "<p>Nilai UTS: $uts</p>";
        echo "<p>Nilai UAS: $uas</p>";
        echo "<p>Nilai Akhir: $nilaiAkhir</p>";
        echo "<p>Grade: $grade</p>";
        echo "<p>Keterangan: $keterangan</p>";
    }
    ?>
</body>
</html>
