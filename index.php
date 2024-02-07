<?php

$numbers = [1,2,3,4,5,6,7,8,9,10];
$counter =0;
$somma = 0;

foreach($numbers as $number){
    $counter++;

    if($number%2==0){
        $somma= $somma+$number;
    }
}

echo($somma/$counter);