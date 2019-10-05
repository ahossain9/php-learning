<?php
// switch
$n = 'orange';
switch($n){
    case 'red':
        echo ucfirst($n) . ' is my favourite color';
        break;

    case 'blue':
    case 'orange':
        echo ucfirst($n) . ' is my favourite color';
        break;

    case 'green':
        echo ucfirst($n) . ' is my favourite color';
        break;
    default:
        echo 'Not match any color';
}

// nested switch
echo '<br>';

$n = -12;
$r = $n % 2;

switch($r){
    case 0:
        switch($n){
            case $n > 0:
                echo "{$n} is a positive number <br>";
                break;
            case $n < 0:
                echo "{$n} is a negative number <br>" ; break;
    }
    default:
        switch($n){
            case $n> 0:
                echo "{$n} is a positive number <br>";
                break;
        case $n < 0:
            echo "{$n} is a negative number <br>"
            break;
        } 
}
