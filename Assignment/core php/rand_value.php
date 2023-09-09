<?php

$values = array(10, 15, 30, 25, 50,);

//Get random value from the array
$randomvalue =$values[array_rand($values)];

echo "Random value: " . $randomvalue;

?>