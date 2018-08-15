<?php 
# function a block of code that can be repeatedly called.

/*
  Camel Case - myFirstFunction
  Lower Case - my_function
  Pascal Case - MyFirstFunction
*/
function simpleFunction(){
  echo 'Hello, World! <br>';
}
simpleFunction();

// Function with params
function sayHello($name = 'World!'){
  echo 'Hello '.$name.'<br>';
}

/*
sayHello('taariqq');
sayHello('Tariq');
sayHello();
*/

// return values
function addNumbers($num1, $num2){
  return $num1 + $num2;
}

echo addNumbers(2,3).'<br>';

// passing args by reference

$myNum = 10;

function addFive($num){
  $num += 5;
}

function addTen(&$num){
  $num += 10;
}

addFive($myNum);
echo 'Value: '.$myNum.'<br>';

addTen($myNum);
echo 'Value2: '.$myNum.'<br>';

 




























































































































































