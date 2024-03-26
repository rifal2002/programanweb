<?php
function repeat($text1, $num1 = 10)
{
    echo "<ol>\r\n";
    for ($i = 0; $i < $num1; $i++) {
        echo "<li>$text1 </li>\r\n";
    }
    echo "</ol>";
}

// Function repeat is called using 2 arguments
repeat("I'm the best", 17);

// Function repeat is called using only 1 argument
repeat("You're the man");
?>
