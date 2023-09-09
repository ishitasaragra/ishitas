<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col-xs-12 col-md-6">
            <form action="" method="post">
                <label>Armstrong Number</label>
                <input type="number" name="number" value="armstrong_number"><br><br>
                <input type="submit" name="submit" value="submit"><br>
            </form>
        </div>
    </div>

<?php
if(isset($_POST['submit']))
{
    $number=$_POST['number'];
    $total=0;
    $x=$number;
    while($x>0)
    {
        $rem=$x%10;
        $total=$total+$rem*$rem*$rem;
        $x=$x/10;
    }

    if($number == $total)
    {
        echo"yes it is Armstrong number";
    }
    else{
        echo"No it is not a Armstrong number";
    }
}
?>
</body>
</html>