<?php
session_start();
//connect to database
//$db=mysqli_connect("localhost","root","","authentication");
require "database.php";
$db = Database::connectMysqli();
if(isset($_POST['login_btn']))
{
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
//	$username=$_POST['username'];
 //   $password=$_POST['password'];

    $password=md5($password); //Remember we hashed password before storing last time
    $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result)==1)
    {
        $_SESSION['message']="You have successfully logged in.";
        $_SESSION['username']=$username;
        header("location:home.php");
    }
   else
   {
                $_SESSION['message']="Your username and password combination was incorrect. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html>
<div class="container">
<head>
  <title>Log In to TeeTyme</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="header">
    <h1>Log In to TeeTyme</h1>
</div>
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<div class="row">
<form  class="form-horizontal" method="post" action="login.php">
  <table>
     <tr>
           <td>Username : </td>
           <td><input type="text" name="username" class="textInput"></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="password" name="password" class="textInput"></td>
     </tr>
      <tr>
           <td><input type="submit" name="login_btn" class="btn btn-success" value="Login"></td>
		   <td />
			<td><a class="btn btn-info" href="register.php">Register</a></td>

     </tr>
  
</table>
</form>
</div>
</body>
</div>
</html>
 
 
