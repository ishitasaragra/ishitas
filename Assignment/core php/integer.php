<?php

$numbers = array(5,10,15,20,25);
$total_number=0;

for ($i = 0; $i < count($numbers); $i++)
{
    $total_number += $numbers[$i];
}
echo "Total_number : " . $total_number;
?>