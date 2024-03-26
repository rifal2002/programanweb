<html>
<head><title>Function UDF</title></head>
<body>
<!-- Input Bilangan -->
<form method="post">
Masukkan Bilangan Pertama:<br>
<input type="text" name="A1" size=10><br>
Masukkan Bilangan Kedua:<br>
<input type="text" name="B1" size=10><br>
<input type="submit" value="hitung">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $A1 = $_POST["A1"];
    $B1 = $_POST["B1"];

    function jumlah1($A1, $B1)
    {
        $jumlahbil1 = $A1 + $B1;
        return $jumlahbil1;
    }

    function kurang1($A1, $B1)
    {
        $kurangbil1 = $A1 - $B1;
        return $kurangbil1;
    }

    function kali1($A1, $B1)
    {
        $kalibil1 = $A1 * $B1;
        return $kalibil1;
    }

    function bagi1($A1, $B1)
    {
        $bagibil1 = $A1 / $B1;
        return $bagibil1;
    }

    echo "<br>";
    echo ("Bilangan Pertama:");
    echo $A1;
    echo "<br>";
    echo ("Bilangan Kedua:");
    echo $B1;
    echo "<br><br>";
    echo "Hasil Penjumlahan 2 buah bilangan";
    echo "<br>";
    $jumlahbil = jumlah1($A1, $B1);
    printf("Penjumlahan antara :%d + %d = %d", $A1, $B1, $jumlahbil);
    echo "<br><br>";
    echo "Hasil Pengurangan 2 buah bilangan";
    echo "<br>";
    $kurangbil = kurang1($A1, $B1);
    printf("Pengurangan antara: %d - %d = %d", $A1, $B1, $kurangbil);
    echo "<br><br>";
    echo "Hasil Perkalian 2 buah bilangan";
    echo "<br>";
    $kalibil = kali1($A1, $B1);
    printf("Perkalian antara: %d * %d = %d", $A1, $B1, $kalibil);
    echo "<br><br>";
    echo "Hasil Pembagian 2 buah bilangan";
    echo "<br>";
    $bagibil = bagi1($A1, $B1);
    printf("Pembagian antara :%d / %d = %d", $A1, $B1, $bagibil);
    echo "<br><br>";
}
?>
</body>
</html>
