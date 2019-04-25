    
<?php

$array = array();

//generate 5 unique numbers
while(count($array) < 5) {
    $rand = rand(-15, 15);
    if(!in_array($rand, $array)){
        array_push($array, $rand);
    }
}

$lowestMissingNumber = NULL;

var_dump($array);

//Should be remove negative numbers from array to reduce runtime and resources.
for ($i = max($array); $i > min($array)-1; $i--) { 

    $inarray = in_array($i, $array);
    $compare = $i > $lowestMissingNumber && $inarray;

    //Of course if we remove the negative numbers from array then the first condition not necessary.
    if ($i <= 0 || $compare) {
        continue;
    } else {
        if(!in_array($i, $array)){
            $lowestMissingNumber = $i;
        }
    }
}

if(isset($lowestMissingNumber)){
    echo "Lowest missing number: $lowestMissingNumber";
} else{
    echo "No missing positive number in array!";
}
