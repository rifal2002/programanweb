<html>
<head><title>Contoh Static Variabel</title></head>
<body><h1>Variabel Static</h1>
<?php
Function dicoba()
{
Static $a= 0;//denganstatic
Echo"Nilai a :" ;
Echo $a ;
Echo"<br>";
$a++;
}
dicoba();
dicoba();
dicoba();
dicoba();
?>  
</body>
</html>