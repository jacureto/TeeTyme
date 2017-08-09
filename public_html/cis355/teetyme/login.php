<?php
  session_start(); 
  require "../crud2/database.php";
  
  if(!empty($_POST))
  {
    //keep track of validation errors
    $nameError = null;
    $passwordError = null;
    
    //keep track of post values
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    //input validation for both username and password
    $inputValid = true;
    
    if(empty($username))
    {
      $nameError = "Please enter a username.";
      $inputValid = false;
    }
    
    if(empty($password))
    {
      $passwordError = "Please enter a password.";
      $inputValid = false;
    }
    
    //password-username validation
    if($inputValid)
    {
      $pdo = Database::connect();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM customers WHERE name = ? LIMIT 1";
      $q = $pdo->prepare($SQL);
      $q->execute(array($username));
      $results = $q->fetch(PDO::FETCH_ASSOC);
      
      if($results['password']==$password)
      {
        $_SESSION['username'] = $username;
        $_SESSION['cust_id'] = $results['id'];
        Database::disconnect();
        header("Location: index.php");
      }
      
      else
      {
        $passwordError = "The password you entered is not valid. Please try again.";
        Database::disconnect();
      }
      
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset = "utf-8">
  <link href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel = "stylesheet">
  <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
  <div class = "container">
    <div class = "span10 offset1">
      <div class = "row">
        <h3>Login</h3>
      </div>
      
      <form class = "form-horizontal" action = "login.php" method = "post">
        
        <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
          <label class = "control-label">Username</label>
          <div class = "controls">
            <input name = "username" type = "text" placeholder = "Username" value = "<?php echo !empty($username)?$username:'';?>">
            <?php if(!empty($nameError)): ?>
              <span class = "help-inline"><?php echo $nameError;?></span>
            <?php endif; ?>
          </div>
        </div>
        
        <div class = "control-group <?php echo !empty($passwordError)?'error':'';?>">
          <label class = "control-label">Password</label>
          <div class = "controls">
            <input name = "password" type = "password" placeholder = "Password" value = "<?php echo !empty($password)?$password:'';?>">
            <?php if(!empty($passwordError)): ?>
              <span class = "help-inline"><?php echo $passwordError;?></span>
            <?php endif;?>
          </div>
        </div>

        <div class="form-actions"><br />
          <button type = "submit" class = "btn btn-success">Log In</button>
          <a class = "btn btn-info" href = "register.php">Register</a>

        </div>
      </form>
    </div>
  </div> <!-- ends container -->
  
  <?php
    echo "<br /><br /><br /><br />;";
    show_source(__FILE__);
  ?>
 
</body>
</html>