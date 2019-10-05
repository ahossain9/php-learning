<?php
// index array
$student = ['Rahim' ,' Karim', 'Kamal', 'Monir'];

// array value change
$student[2] = 'Sujon';
print_r($student);

// array_pop function
echo '<br>';
$student = array_pop($student);
print_r($student);

// array_push function
echo '<br>';
$new_student = ['Rahim' ,' Karim', 'Kamal', 'Monir'];
$new_student = array_push($new_student, 'Hamid');
print_r($new_student);

// associative array
echo '<br>';
$foods = [
    'vegetables' => 'brinjal, carrot, capsiamc',
    'fruits' => 'apple, banana, orange'
];

foreach($foods as $key => $value){
    echo $key . " = " . $value . "<br>"; 
}

// add new value
echo '<br>';
$foods['fruits'] .= " , pineapple";
print_r($foods);
