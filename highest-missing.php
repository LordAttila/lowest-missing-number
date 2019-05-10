<?php

$array = array();

//generate 5 unique numbers
while(count($array) < 5) {
    $rand = rand(-15, 15);
    if(!in_array($rand, $array)){
        array_push($array, $rand);
    }
}

$lowestMissingNumber = 1;

var_dump($array);

for ($i=min($array); $i < max($array)+1; $i++) { 
    echo "I = " . $i . "<br>";
    if ($i > 0 && !in_array($i, $array)) {
        $lowestMissingNumber = $i;
    }
}

var_dump($lowestMissingNumber);
