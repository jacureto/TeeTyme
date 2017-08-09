<?php
// from: https://www.youtube.com/watch?v=lGYixKGiY7Y

session_start();
//connect to database
require "../crud2/database.php";
if(isset($_POST['register_btn']))
{
		$db=Database::connectMysqli();

    $username=mysqli_real_escape_string($db, $_POST['username']);
    $password=mysqli_real_escape_string($db, $_POST['password']);
    $password2=mysqli_real_escape_string($db, $_POST['password2']);  
      if($password==$password2)
      {         
        $password=md5($password);
        $sql="INSERT INTO users(username,password) VALUES('$username','$password')"; 
        mysqli_query($db,$sql);
        $_SESSION['message']="You are now logged in."; 
        $_SESSION['username']=$username;
        header("location:index.php");  
      }
    else
    {
      $_SESSION['message']="Your two passwords do not match. Please try again.";   
     }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Register , login and logout user php mysql</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="header">
    <h1>Register, login and logout user php mysql</h1>
</div>
<?php
    if(isset($_SESSION['message']))
    {
          echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<form method="post" action="register.php">
  <table>
     <tr>
           <td>Username : </td>
           <td><input type="text" name="username" class="textInput"></td>
     </tr>
     <tr>
           <td>Email : </td>
           <td><input type="email" name="email" class="textInput"></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="password" name="password" class="textInput"></td>
     </tr>
      <tr>
           <td>Password again: </td>
           <td><input type="password" name="password2" class="textInput"></td>
     </tr>
      <tr>
           <td></td>
           <td><input type="submit" name="register_btn" class="Register"></td>
     </tr>
  <?php
?>
</table>
</form>
</body>
</html>
