<?php

function removeDuplicates($arr)
{
    $result = array();
    foreach ($arr as $value)
    {
        if (!in_array($value, $result))
        {
            $result[]= $value;
        }
    }

    return $result;
}

$arr= array(1,1,2,3,4,5,5,6);
$result= removeDuplicates($arr);

echo "The number is : " . implode(', ',$result );
?>
