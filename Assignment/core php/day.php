<?php
    function findThursday($week)
    {
        switch($week) 
        {
            case 'Monday':
            echo'this is not Thursday';
            break;

            case 'Tuesday':
            echo'this is not Thursday';
            break;

            case 'Wednesday':
            echo'this is not Thursday';
             break;

            case 'Thursday':
            echo'Thursday is prasent in week';
            break;

            case 'Friday':
            echo'this is not Thursday';
            break;

            case 'Saturday':
            echo'this is not Thursday';
            break;

            case 'Sunday':
            echo'this is not Thursday';
            break;

            default:
            echo 'This is not valid';
            break;
        }
    }
    $week ='Thursday';
    findThursday($week);
   
 ?>
