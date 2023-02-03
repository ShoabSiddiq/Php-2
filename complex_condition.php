<?php 

// 1. is is divisible by 4?
//2. if 1 no condition true then divisble by 100?
//3. divisible by 400?

//leap year or not

$year=2012;
if($year % 4==0 && ($year % 100!=0 || $year % 400==0)){
    echo ("$year is a leap year");
}else{
    echo ("$year is not a leap year");
}