<html>
<head>
<title>contohPenggunaanIF</title>
</head>
<body>
<h3>Menentukan bilangan ganjil/genap</h3>
<form method="post" action="">
MasukanNilai:
<input type=text name=input1><br><br>
<input type=submit value="Proses">
</form>
<?php

if(isset($_POST['input1']))
{

$nilai=intval($_POST['input1']);

if($nilai%2==0)
printf("$nilai merupakan bilang genap");
 else
printf("$nilai merupakan bilang ganjil");;
}
?>
</body>
</html>