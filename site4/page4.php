<?php 
// to unset a session
  session_start();
//  unset($_SESSION['name']); // to unset just one value
  session_destroy();
?>