<?php
function day_name(){
    $day1 = "Monday";
    $day2 = "Tuesday";
    $day3 = "Wednesday";
    $day4 = "Thursday";
    return array($day1,$day2,$day3,$day4);
}
//$days =  day_name();
//echo $days[0]."<br />".$days[1]."<br />".$days[2]."<br />".$days[3];

list($day1,$day2,$day3,$day4) = day_name();
echo $day1."<br />".$day2."<br />".$day3."<br />".$day4;