<?php
$num1 = 50;
$num2 = 65;
$num3 = 45;

$largest = ($num1 >= $num2 && $num1 >= $num3) ? $num1 : (($num2 >= $num1 && $num2 >= $num3) ? $num2 : $num3);

echo "The largest number is: " . $largest;
?>
