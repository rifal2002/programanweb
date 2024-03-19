<?php
$nmbrg=$_POST['nmbrg'];  //$_GET
$hsbrg=$_POST['hsbrg'];  //$_REQUEST(bisauntukGetdanPost)
$jmlbrg=$_POST['jmlbrg'];
$harga=$hsbrg*$jmlbrg;
echo "Nama Barang   : $nmbrg<br>";
echo "Harga Satuan  : Rp.$hsbrg<br>";
echo "Jumlah barang :$jmlbrg<br>";
echo "Total Harga Barang: Rp.$harga<br>";
?>