<html>
<head>
<title>Contoh Counter</title>
</head>
<body>
<?php
$nama_file="counter.dat";
If(file_exists($nama_file))
{
berkas1 = fopen($nama_file ,"r");
$pencacah1=(integer)trim(fgets($berkas1,255));
$pencacah1++;
Fclose($berkas1);
}
Else
$pencacah1=1;
//simpanpencacah1
$berkas1=fopen($nama_file,"w");
Fputs($berkas1,$pencacah1);
Fclose($berkas1);

//tuliskehalamanweb
Print("Anda pengunjung ke-$pencacah<br>\n");?>
</body>
</html>