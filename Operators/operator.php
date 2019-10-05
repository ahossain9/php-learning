<?php
// ternary operator
echo '<br>';
$number = 100;
$result = $number % 2 == 0 ? 'It is even number': 'It is odd number';
echo $result;

echo '<br>';
$number = 99;
$result = $number % 2 == 0 ? 'It is even number': ($number % 3 !== 0 ? 'Correct': 'Incorrect');
echo $result;

