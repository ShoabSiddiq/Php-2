<?php 
/*
Integer Int
Double / Float
Boolean
Null
String
Array
Object
Resource
*/
$result=false;
var_dump($result);

$name="Earth";
$upper_name=strtoupper($name); //use this function to make upper case value print
echo "We are living on {$name}";
echo "\n";
echo "WE are living on {$upper_name}\n";
printf("We are state on %s",$name);
echo "\n";

$fname="Shoab";
$lname="Siddiq";
printf("His name is %s %s\n",$fname,$lname);
echo "His name is {$fname} {$lname}\n";
printf("His %s Name is %s %s\n","Full",$fname,$lname);

echo "My first name is ".$fname." and My last name is ".$lname."\n";
printf("My first name is %s and My last name is %s\n",strtoupper($fname),strrev($lname)); //strrev =reverse number
