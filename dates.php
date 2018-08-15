<?php 
echo'd prints: '. date('d').'<br>'; // date 
echo'D prints: '. date('D').'<br>'; // day 
echo'm prints: '. date('m').'<br>'; // month numeric
echo'Y prints: '. date('Y').'<br>'; // year
echo'l prints: '. date('l').'<br>'; // day - long form
echo'M prints: '. date('M').'<br>'; // month Jul
echo'y prints: '. date('y').'<br>';
echo's prints: seconds '. date('s').'<br>';
echo'S prints: '. date('S').'<br>';
echo'i prints: minutes '. date('i').'<br>';
echo'h prints: hour'. date('h').'<br>';
echo date('a');
echo date('A');
echo date('p').'<br>';
echo date('P');
echo '<br>';

echo date('l, M d Y');

// date also works with the hour
echo '<br>';
echo date('h').'<br>';
echo date('H').'<br>';
echo date('i').'<br>'; // min

// set time zone
date_default_timezone_set('Asia/Karachi');
echo date('l M d, Y - h:i:s a').'<br>';

$timestamp = mktime(10, 14, 54, 9, 10, 1981);
echo $timestamp.'<br>';
echo 'Brad\'s birthdate is '. date('h:i:s a m-d-Y', $timestamp).'<br>';

// string functions
$timestamp2 = strtotime('4:22pm July 23 2018');
$timestamp3 = strtotime('tomorrow'); // be vague
$timestamp4 = strtotime('+2 Months'); // be vague
echo $timestamp2.'<br>';
echo date('h:i a Y M d l', $timestamp4);































