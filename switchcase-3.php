<?php 
 //switch case type casting

 $string="8balls";
 switch($string){
    case (string) "9balls": // here string because of type casting purpose
        echo "Nine balls";
        break;
    case (string) 8:
        echo "8";
         break;
    case (string) "8balls":
        echo "Eight balls";
        break;
 }

 

