<?php
$C=123;//variableglobal
function Test(){
global $C;//variablelocal
echo"C pada fungsi berisi= $C\n";
}
Test();
echo"C diluar fungsi berisi= $C\n";
?>