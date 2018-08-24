<?php 
# substr() - returns a portion of a string

// $output = substr('hello', 1, 3);
/* $output = substr('hello', -3); // start at index -3 and move forward
echo $output;

# strlen() - returns the length of a string
$output = strlen('Hello, World!');
echo $output;

#strpos() - finds the position of the first occurence of a substring
$output = strpos('Hello, World of PHP!', 'P');
echo $output;

#strrpos() - finds the position of the last occurence of a substring

$output = strrpos('Hello, World of PHP', 'o');
echo $output;
# trim() - strips whitespace
$text = 'Hello, World              ';
var_dump($text);

$trimmed = trim($text);
var_dump($trimmed);
# strtoupper()
$output = strtoupper('Hello, World!');
echo $output;
# strtolower - lowercases
# ucwords() - capitalizes every word

$output = ucwords('hello, world!');
echo $output;
# str_replace() - replace all occurences of a search string with a replacement
$string = 'hello, how are you doing my enemy? You know, come to think of it, is it worth being enemy';
// replace 'healthy' with 'yummy' in the 'phrase' - phrase comes last
echo str_replace('enemy', 'friend', $string).'<br>';

$text = 'Hello World!';
$output = str_replace('World', 'Everyone', $text);
echo $output;
# is_string() - check to see if it is a string
$val = 455;
echo is_string($val);
var_dump($val);

$values = [true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0'];

foreach($values as $key => $value){
  echo is_string($value);
}
echo '<br>';

foreach($values as $key => $value){
  if(is_string($value)){
    echo $value .' is a string <br>';
  }
}
*/
# gzcompress() - compress a string
$string = "(v.o) Oklahoma ripped Ohio State 52-0. (Biff puts the almanac on the seat next to him. Marty spots his chance!) West Virginia lost to Pittsburgh 26-7. (Marty quietly opens the car door.) Maryland defeated Clemson 25-12. Repeating tonight's earlier weather bulletin, a severe thunderstorm is heading for Hill Valley. (Biff looks around and sees Marty. Marty tries to grab the almanac. Biff turns to face the front again, before suddenly realising who it is and turning round again. He grabs the book, as does Marty, and they are having a tug of war over it.) Don't even... give me that book! Let it go! (He kicks Marty, and the almanac flies in the air, landing on Biff's windscreen. Marty is still holding onto the car, and Biff spots some barriers ahead.) Let go of the car! (He drives around in circles, but both Marty and the almanac stay attached to it. Biff drives forward, passing a sign - \"Tunnel Ahead\". Biff drives towards the tunnel edge, hoping to force Marty off. Marty gets to the back of the car, and the side of the car id dented by the tunnel. Biff looks around - no Marty.) That'll teach him. (Biff tries to grab the almanac, but as he does so he looks in the mirror and spots Marty. Marty makes his way towards Biff. Biff elbows and punches Marty, and then spots a truck approaching in the other direction. Biff drives past, and Marty uses the hoverboard to escape - and then grabs the almanac. Letting go of Biff's car, he stops in the middle of the tunnel. Biff gets to the edge of the tunnel and turns around. Marty looks at the other end - it's some distance away! Marty puts the almanac inside his jacket and sets off. Biff revs up his car, puts his foot on the pedal and sets off after Marty.) Argh! (Biff is getting closer, He pus the pedal down again and laughs evilly. Marty is almost at the end of the tunnel but Biff is almost on him.) Woah!";

$compressed = gzcompress($string);
//echo $compressed;

$original = gzuncompress($compressed);
echo $original;








































































