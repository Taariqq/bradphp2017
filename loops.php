<?php 
// for, while, do..while, foreach
# for loop
# @params - init, condition, increment
/*
for($i = 0;$i < 10;$i++){
  echo $i;
}
*/
# while
# #params -condition

$i = 0;

while($i < 8){
  echo $i;
  echo ',';
$i++;
};
echo $i;

# Do..While
# @params - condition

$i = 0;
do{
  echo $i;
  echo '<br>';
  $i++;
}
while($i < 10);

# Foreach - works with arrays


$people = ['Brad', 'Jose', 'William'];

foreach($people as $pos => $person){
  echo $pos.' '.$person . '<br>';
} 


$people = ['Brad' => 'brad@gmail.com', 'Jose' => 'jose@yahoo.com', 'William' => 'william@hotmail.com'];

foreach($people as $person => $email){
  echo $person.' '.$email. '<br>';
} 


 













































































































































