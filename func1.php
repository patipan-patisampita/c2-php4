<?php
//Function in PHP
function add(){
    $a = 10;
    $b = 5;
    $add = $a + $b;
    echo "This is a Function add = " . $add ."<br />";
}

function sub(){
    $a = 10;
    $b = 5;
    $sub = $a - $b;
    echo"This is a Function Sub = ".$sub."<br />";
}

function division(){
    $a = 10;
    $b = 5;
    $division = $a / $b;
    echo"This is a Function division = ".$division."<br />";
}

function multiply(){
    $a = 10;
    $b = 5;
    $multip = $a * $b;
    echo"This is a Function multiply = ".$multip;
}
add();
sub();
division();
multiply();
