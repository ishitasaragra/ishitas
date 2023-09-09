<?php

 // 1. Numeric array:

$Fruits = array("Orange","Mango","Apple");
{
    $jsonstring = '["Orange","Mango","Apple"]';
    
    $array = json_decode($jsonstring);
}
 echo "1. Numeric array: " ."<br>";
 echo $array[0] ."<br>";
 echo $array[1] ."<br><br>";




 // 2. Associative array:

 $person = array("name" => "Ishita", "age" => 20, "city" => "Ahmedabad");
 {
    $jsonstring ='{"name":"Ishita", "age": 20, "city":"Ahmedabad"}';

    $array = json_decode($jsonstring, true);
 }
 echo "2. Associative Array: " ."<br>";
 echo $array["name"] . "<br>";
 echo $array["age"] . "<br>";
 echo $array["city"] . "<br><br>";




 // 3. Multidemensional array:

 $matrix = array( array(11, 12, 13),
                  array(14, 15, 16),
                  array(17, 18, 19));
{
    $jsonstring ='[[11, 12, 13], [14, 15, 16], [17, 18, 19]]';

    $array = json_decode($jsonstring, true);
 }
 echo "3. Multidemensional Array: " ."<br>";
 echo $array[0][0] . "<br>";
 echo $array[1][2];
              
 
?>
    