<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculate percentage and grade</title>
</head>
<body>
    <h1>Enter marks for five subjects</h1>
      <form method="post" action="">
        <label>Physics:<input type="number" name="subject1" required></label><br>
       <br><label>Chemistry<input type="number" name="subject2" required></label></br>
        <br><label>Biology:<input type="number" name="subject3" required></label></br>
       <br><label>Mathematics:<input type="number" name="subject4" required></label></br>
       <br><label>Computer:<input type="number" name="subject5" required></label></br>
       <br><button><input type="submit" name="submit"></button>
    </form>
<?php
if (isset($_POST['submit']))
{
    $subject1=$_POST['subject1']; 
    $subject2=$_POST['subject2'];
    $subject3=$_POST['subject3'];
    $subject4=$_POST['subject4'];
    $subject5=$_POST['subject5'];

    $totalMarks=$subject1+$subject2+$subject3+$subject4+$subject5;
    $percentage=($totalMarks / 500)*100;

    echo "Results:" ."<br>";
    echo "Total Marks:" . $totalMarks ."<br>";
    echo "Percentage:" . $percentage . "<br>";

    // calculate grade wice percentage
    if ($percentage >=90)
    {
        echo "Grade: A+";
    }
    elseif ($percentage >=80)
    {
        echo "Grade: A";
    }
    elseif ($percentage >=70)
    {
        echo "Grade: B";
    }
    elseif ($percentage >=60)
    {
        echo "Grade: C";
    }
    elseif ($percentage >=50)
    {
        echo "Grade: D";
    }
    elseif ($percentage >=40)
    {
        echo "Grade: E";
    }
    else{
        echo "Grade: Fail";
    }
}
?>

</body>
</html>