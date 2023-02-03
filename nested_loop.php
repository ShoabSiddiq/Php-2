<?php 

//nested loop

$condition1=false;
$condition2=false;
$condition3=false;

 if($condition1 && $condition2 && $condition3){
    echo "Hello";
 }elseif($condition1 && $condition2){
    echo "no 1";
 }elseif($condition1){
    echo "no 2";
 }else{
    echo "no 3";
 }

 