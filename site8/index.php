<?php 
  require 'config/config.php';
  require 'config/db.php';
// fetch posts
  $query = 'SELECT * FROM posts';
// get results
  $result = mysqli_query($conn, $query);
//var_dump($result);
// multiple ways to fetch data
// here using mysqli and get it into an associative array
  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
//  print_r($posts);
//  var_dump($posts);
  // free the result from memory
  mysqli_free_result($result); // expects mysqli result, that is why
// close connection 
  mysqli_close($conn);
?>
<?php include 'inc/header.php'; ?>
<div class="container">
  <h1>Posts</h1>
  <?php foreach($posts as $post) : ?>
  <div class="well">
    <h3>
      <?php echo $post['title']; ?>
    </h3>
    <small>Created on
      <?php echo $post['created_at']; ?> by
      <?php echo $post['author']; ?></small>
    <p>
      <?php echo $post['body']; ?>
    </p>
    <a class="btn btn-default" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read more ...</a>
  </div>

  <?php endforeach; ?>
</div>
<?php include 'inc/footer.php'; ?>
