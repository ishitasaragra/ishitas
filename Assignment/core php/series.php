<?php
function fibonacciSeries($n)
{
    $fibonacci = [0,1];

    for ($i = 2; $i < $n; $i++)
    {
        $fibonacci[$i] = $fibonacci[$i - 1]+$fibonacci[$i - 2];
    }
    return $fibonacci;
}
 $n = 10;
 $fibonacciSeries = fibonacciSeries($n);

 echo "Fibonacci Series: " . implode(', ', $fibonacciSeries);
?>