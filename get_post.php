<?php
  if(isset($_GET['name'])){
   $name = htmlentities( $_GET['name']);
//    echo $name;
//print_r($_GET);
    // xss attacks
  };
/*
if(isset($_POST['name'])){
  $name = htmlentities($_POST['name']);
  // echo $name;
  //print_r($_POST);
}


if(isset($_REQUEST['name'])){
  print_r($_REQUEST);
  $name = htmlentities($_REQUEST['name']);
  echo $name;
 // -- $_REQUEST works with either POST/GET request
}

echo $_SERVER['QUERY_STRING'];
*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>get post</title>
</head>

<body>
  <form action="get_post.php" method="GET">
    <div>
      <label for="">Name</label><br>
      <input type="text" name="name">
    </div>
    <div>
      <label for="">Email</label><br>
      <input type="text" name="email">
    </div>
    <input type="submit" value="Submit">
  </form>

<!--This is to directly send data via query string-->
<ul>
  <li><a href="get_post.php?name=Tariq">Tariq</a></li>
  <li><a href="get_post.php?name=Brad">Brad</a></li>
</ul>

<?php echo "{$name}'s Profile"; ?>
</body>

</html>
























