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
sayHello('how', 'ya doin'); // only prints the 1st one
*/
// return values
function addNumbers($num1, $num2){
  return $num1 + $num2;
}

echo addNumbers(2,3).'<br>';

// passing args by reference

$myNum = 10;
$yourNum;

echo 'Value of $yourNum before passing thru addTen: '.$yourNum .'<br>';

function addFive($num){
  echo $num += 5;
  echo '<br>';
}
//echo '$num after addFive: '.$num.'<br>'; // why does this not work?

function addTen(&$num){
echo  $num += 10;
  echo '<br>';
} // passbyref changes the actual value. like the 'address of' thing.

addFive($myNum);
echo 'Value: '.$myNum.'<br>';

addTen($myNum);
echo 'Value2: '.$myNum.'<br>';

addTen($yourNum);
echo 'Value of $yourNum after passing thru addTen: '.$yourNum;
