<?php 
  // change / update cookie
  setcookie('username', 'Frank', time() + (86400 * 30));
  // sets it for a month
  // now to unset just set time to a past time
 setcookie('username', 'Frank', time() - 3600);
if(count($_COOKIE) > 0) {// check if there are any cookies
  echo 'There are '.count($_COOKIE).' cookies saved';
} else {
  echo 'There are no cookies saved';
}

  if(isset($_COOKIE['username'])){
    echo 'User '. $_COOKIE['username'] . ' is set <br>';
  } else {
    echo 'User is not set';
  }
?>