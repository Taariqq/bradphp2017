<?php 
  // msg vars for when not empty
  $msg = '';
  $msgClass = '';

  // check for submit
  if(filter_has_var(INPUT_POST, 'submit')){
    echo 'Submitted';
    // get the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    // check required fields
    if(!empty($email) && !empty($name) && !empty($message)){
      //passed
      echo 'PASSED';
      // check email
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        // failed
      $msg = 'Please use a valid email';
      $msgClass = 'alert-danger';
      } else {
        // passed
        // recepient email 
        echo 'passed';
        $toEmail = 'taariqq@gmail.com';
        $subject = 'Contact Request From '.$name;
        $body = '<h2>Contact Request</h2>
          <h4>Name</h4><p>'.$name.'</p>
          <h4>Email</h4><p>'.$email.'</p>
          <h4>Message</h4><p>'.$message.'</p>';
        
        // email headers
        $headers = "MIME-Version: 1.0" ."\r\n";
        $headers .= "Content-Type:text/html; charset=UTF-8" . "\r\n";
        //additional headers ... from
        $headers .= "From: " .$name. "<".$email.">". "\r\n";
        // mail function
        if(mail($toEmail, $subject, $body, $headers)){
          // email sent
          $msg = 'Your email has been sent';
          $msgClass = 'alert-success';
        } else {
          // email send failed
          $msg = 'Email was not sent';
          $msgClass = 'alert-danger';
        }
      }
    } else {
      //failed
      $msg = 'Please fill in all the fileds';
      $msgClass = 'alert-danger';
    }
  }
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-default">
    <?php if($msg != ''): ?>
    <div class="alert <?php echo $msgClass; ?>">
      <?php echo $msg; ?>
    </div>
    <?php endif; ?>
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand">My Website</a>
      </div>
    </div>
  </nav>
  <div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" 
        value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : '';?> ">
      </div>
      <div class="form-group">
        <label for="">Message</label>
        <textarea name="message" class="form-control" id="" cols="30" rows="10"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
      </div>
      <br>
      <button type="submit" name="submit" class="btn-primary btn">Submit</button>
    </form>
  </div>
</body>

</html>
