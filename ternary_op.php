<?php 

//ternary operator

$n=10;

 if($n % 2==0){
    echo "Even Number";
 }else{
    echo "Odd Number";
 }

 echo  "\n";

 $result = ($n % 2 ==0) ? "{$n} is a Even Number" : "{$n}is a Odd Number";
 echo $result;