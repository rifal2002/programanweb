<?php
$A=123;//variableglobal
function Test(){
$A="Test";//variablelocal
echo"variabel A berisi= $A\n";
}
Test();
echo"A diluar fungsi berisi= $A\n";
?>