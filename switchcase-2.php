<?php 
$n=-15;
$r=abs($n)%2; //abs function always count positive value.

switch(true){
    case ($r==0 && $n>0):
        echo "$n is a positive even number";
        break;
    case ($r==1 && $n>0):
        echo "$n is a positive odd number";
         break;
    case ($r==0 && $n<0):
         echo "$n is a negative even number";
        break;
    case ($r==1 && $n<0):
         echo "$n is a negative odd number";
        break;

}