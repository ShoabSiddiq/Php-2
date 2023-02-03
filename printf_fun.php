<?php

$fname="Shoab";
$lname="Siddiq";
printf('My full name is %2$s %1$s',$fname,$lname); // %2means 2nd part=$lname &&& %1means 1st part=fname; when using this use single quatation called variable swapping. $fname,$lname called argument

echo "\n";
printf('The binary equivalent of %1$d is %1$b',12);
echo "\n";

$n=45.1233445;
printf("%.2f",$n); //2step after floating point
echo "\n";

$m=123; //we can see 0123
$n=23;// we can see 0023

printf("%04d\n",$m);
printf("%04d\n",$n);
echo "\n";

$y=123.3253;
$t=27.155;
printf("%08.2f\n",$y);
printf("%08.2f\n",$t);
