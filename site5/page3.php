<?php // store more than one piece of date in cookies using arrays
  $user = ['name' => 'Brad',
           'email' => 'test@test.com',
          'age' => 35];
// to prepare data to be stored because fxn setcookie() won't take $user as an array since it is not a string
  $user = serialize($user);
  setcookie('user', $user, time() + (86400 * 30));

  $user = unserialize($_COOKIE['user']); 
  // above unserialized so it could be read as an array
  echo $user['name'];
?>
