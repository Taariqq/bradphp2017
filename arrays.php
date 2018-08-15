<?php 
// three types a) indexed, b) associative and c) multi-dimensional

//  indexed arrays
// changes to test shell theme and git prompt
$people = array('Keving', 'Jeremy', 'Sara');
//echo $people[1];
$ids = array(23, 55, 12);

echo $ids[1];

$cars = ['Honda', 'Toyota', 'Ford'];
//echo $cars[3];

$cars[3] = 'Suzuki';
echo $cars[3];
$cars[7] = 'Antonov';
//echo $cars[6];
$cars[] = 'BMW';
echo $cars[8];

echo '<br> '.count($cars).'<br>';

echo '<pre>';
print_r($cars);
echo '</pre>';

var_dump($cars);

// associative 
$people = ['Brad' => 24, 'Jose' => 27, 'William' => 21];
var_dump($people);

$ids = [22 => 'Brad', 44 => 'jose', 63 => 'William'];
echo $ids [44];

$people[] = 42;
$people [] = 77;
$people[] = 'Jane';
var_dump($people);

// multi dimentional arrays

$cars = array(
  array('honda', 20, 10),
  array('toyota', 30, 20),
  array('ford', 23, 12),  
);

echo $cars[0][0];






















 
































