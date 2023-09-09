<?php

$balance = array( array(1.1, 2.1, 3.1, 4.1, 5.1),
                  array(6.1, 7.1, 8.1, 9.1, 10.1),
                  array(11.1, 12.1, 13.1, 14.1, 15.1));

for ($row = 0; $row < 3; $row++)
{
    for ($col =0; $col < 5; $col++)
    {
        echo $balance[$row][$col] . " ";
       
    }
    
    echo "<br>";
}
?>