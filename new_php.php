<?php

echo "Welcome to my page!";
echo "<br/>";


$x=5;
echo $x;           // 5
echo "<br/>";
echo $x+++$x++;    // 11      
echo "<br/>";
echo $x;            // 7     
echo "<br/>";
echo $x---$x--;      // 1
echo "<br/>";
echo $x;             // 5

echo "<br/>";

$a = "1";
$b = &$a;
$b = "2$b";
echo $a;           // 21
echo "<br/>";
echo $b;            // 21


?>