<?php
// logical operator
echo '<br>';
$food = 'salmon';
if('salmon' == $food || 'tuna' == $food){
    echo 'Best Food';
} else{
    echo 'Isn\'t good for health';
}


// findout leaf year
echo '<br>';
$year = 2000;
if( $year % 4 == 0 && ( $year %100 !=0 || $year % 400 == 0 )){
    echo "{$year} is a leaf year";
} else{
    echo "{$year} is not a leaf year"; 
}
