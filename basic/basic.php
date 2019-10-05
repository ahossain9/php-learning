<?php

// use of printf() function
$capital = 'Capital';
$country = 'Bangladesh';
printf('Dhaka is the %s of %s', $capital, $country);

echo '<br>';
printf('The binary equivalent of %1$d is %1$b', 12);

// value sorting in printf() function
echo '<br>';
$fname = 'Amir';
$lname = 'Hossain';
printf('My name is %2$s %1$s', $lname, $fname);


// use of sprintf() function
echo '<br>';
$output = sprintf('My name is %2$s %1$s', $lname, $fname);
echo $output;

