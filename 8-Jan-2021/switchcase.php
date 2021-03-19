<?php
    
    $weekday = 4;
    
    switch($weekday)
    {
        case "1":
            echo "Today Is Sunday";
            break;

        case "2":
            echo "Today Is Monday";
            break; 

        case "3":
            echo "Today Is Tuesday";
            break; 

        case "4":
            echo "Today Is Wednesday";
            break;

        case "5":
            echo "Today Is Thursday";
            break; 
        
        case "6":
            echo "Today Is Friday";
            break; 
        
        case "7":
            echo "Today Is Saturday";
            break; 

        default:
            echo "Enter Valid Number of Week";
            break;
    }
?>