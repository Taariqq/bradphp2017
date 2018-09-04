<?php 
  require 'config/config.php';
  require 'config/db.php';
// get id
  $id = mysqli_real_escape_string($conn, $_GET['id']);
// fetch posts
  $query = 'SELECT * FROM posts WHERE id = '.$id;
// get results
  $result = mysqli_query($conn, $query);
// var_dump($result);
// multiple ways to fetch data
// here using mysqli and get it into an associative array
  $post = mysqli_fetch_assoc($result);
//  print_r($post);
//  var_dump($posts);
  // free the result from memory
  mysqli_free_result($result); // expects mysqli result, that is why
// close connection 
  mysqli_close($conn);
?>
<?php include 'inc/header.php'; ?>
  <div class="container">
   <a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>
    <h1><?php echo $post['title']; ?></h1>
      <small>Created on
        <?php echo $post['created_at']; ?> by
        <?php echo $post['author']; ?></small>
      <p>
        <?php echo $post['body']; ?>
      </p>
  </div>
<?php include 'inc/footer.php'; ?>











