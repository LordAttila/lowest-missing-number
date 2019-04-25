    
<?php
$array = array();
//generate 5 unique numbers
while(count($array) < 5) {
    $rand = rand(-15, 15);
    if(!in_array($rand, $array)){
        array_push($array, $rand);
    }
}

var_dump($array);
