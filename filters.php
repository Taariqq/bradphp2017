<?php 
  // check for posted data - instead of isset() we use this
/*
  if(filter_has_var(INPUT_POST, 'data')) {
    echo 'Data Found <br>';
  } else {
    echo 'No Data <br>';
  }
  */
/*
if(filter_has_var(INPUT_POST, 'data')) {
  if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
    echo 'Email IS valid <br>';
  } else {
    echo 'Email is NOT valid <br>';
  }
}
*/
// same thing as above with ternary operator but doesn't seem to work
/*
if(filter_has_var(INPUT_POST, 'data')) {
(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) ? echo 'Email is valid'; : echo 'Email is not valid';
}
*/
// same as above with sanitization
if(filter_has_var(INPUT_POST, 'data')){
  $email = $_POST['data'];
  // remove illegal char
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  echo $email . '<br>'; 

  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'Email is valid <br>';
  } else {
    echo 'Email is not valid <br>';
  }
}
/* List of validations
  # FILTER_VALIDATE_BOOLEAN
  # FILTER_VALIDATE_EMAIL
  # FILTER_VALIDATE_FLOAT
  # FILTER_VALIDATE_INT
  # FILTER_VALIDATE_IP
  # FILTER_VALIDATE_REGEXP
  # FILTER_VALIDATE_URL
  
  List of sanitizers
  # FILTER_SANITIZE_EMAIL
  # FILTER_SANITIZE_ENCODED
  # FILTER_SANITIZE_NUMBER_FLOAT
  # FILTER_SANITIZE_NUMBER_INT
  # FILTER_SANITIZE_SPECIAL_CHARS
  # FILTER_SANITIZE_STRING
  # FILTER_SANITIZE_URL
*/
// int validation
$var = 23;

if(filter_var($var, FILTER_VALIDATE_INT)){
  echo $var.' is a number';
} else {
  echo $var.' is not a number';
}
// sanitize a number
$var = '23ljalfdlj234';
var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

$email = 't%#*)@aari&^\'q.com';
  var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));
// above is sanitizing only a few characters

$var = '<script>alert(1)</script>';
//echo $var;
echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
echo '<br>';
// filter_var_array and filter_input_array
$filters = [
  "data" => FILTER_VALIDATE_EMAIL,
  "data2" => [
    "filter" => FILTER_VALIDATE_INT,
    "options" => [
      "min_range" => 1,
      "max_range" => 100
    ]
  ]
];
print_r(filter_input_array(INPUT_POST, $filters));
echo '<br>';
// filter var array

$arr = [
  "name" => "tariq qureshi",
  "age" => 52,
  "email" => "taariqq@gamil.com"
];

$filters = [
  "name" => [
    "filter" => FILTER_CALLBACK,
    "options" => "ucwords"
  ],
  "age" => [
    "filter" => FILTER_VALIDATE_INT,
    "options" => [
      "min_range" => 1,
      "max_range" => 120
    ]
  ],
  "email" => FILTER_VALIDATE_EMAIL
];

print_r(filter_var_array($arr, $filters));

?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <!-- action is set such that even if we change the file the form would still work php_self give current page -->
  <input type="text" name="data">
  <input type="text" name="data2">

  <button type="submit">Submit</button>
</form>










p