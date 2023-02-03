<?php
$name="Bangladesh";
$age=30;
$question="How are you";
$myNameIs="Shoab Siddiq";// Camel case variable beacuse here 1st word is small and every other wword in the section 1st word is big(hereNameIs)
 echo "$name";
 echo "\n";
 echo "$myNameIs";
 echo "\n";
 $word ="age";
 echo $$word;
 echo "\n";
 echo "Hello $myNameIs";
 echo "\n";
 echo "Hello {$name}\n{$question}";
