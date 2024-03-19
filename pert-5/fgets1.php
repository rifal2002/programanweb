<?php
$file1=fopen("test1.txt","r");
echo fgets($file1);
fclose($file1);
?>