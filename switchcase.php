<?php 

// switch case
$color="red";
switch($color){
    case "red":
    echo "Red is my fav color\n";
    break;
    case "blue":
    echo "Blue is my fav color\n";
     break; 
    case "green" :
    echo "Green is my fav color\n";
    break;
    default:
    echo "This color is ok\n";
}

$color="blue";
switch($color){
    case "red":
        case "blue":
            case "green":
                echo ucwords($color). " is my fav color"; //ucwords= j kono string r letter k capital kore dai.
                break;
    

                default:
                echo "This color is ok";
    
}