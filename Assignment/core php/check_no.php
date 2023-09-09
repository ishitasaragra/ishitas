
<?php
function iseven($number)
{
    $isEven = array('Even','Odd');
    return $isEven[$number % 2];
}

$number = 8;
$result = isEven($number);

echo "The number $number is $result.";
?>