<?php
  session_start();
  if(empty($_SESSION['name'])) header("Location: login.php"); //redirect
?>

<!DOCTYPE html>
<html lang = "en">
  <head>

    
    <meta charset = "utf-8">
    <link href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel = "stylesheet">
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" />
  </head>
  
  <body>
        <div class="container">
		
      <form class="form-signin" method="post">
		<h1 align="center" style="font-size:50px"><strong>Tee Tyme</strong></h1>
        <h2 class="form-signin-heading">Registration</h2>
        <label for="username" class="textInput">Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
        <label for="password" class="textInput">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
		<label for="password2" class="textInput">Reenter Password</label>
        <input type="password" id="password2" name="password2" class="form-control" placeholder="Reenter Password" required>
        <div class="checkbox">
        </div>	
        <button class="btn btn-lg btn-success btn-block" type="submit" name="register_btn">Register</button>
		
		<?php
		if(isset($_SESSION['message']))
		{
			 echo "<br /><div style='color:red' id='error_msg' class='form-control'>".$_SESSION['message']."</div>";
			 unset($_SESSION['message']);
		}
		?>
      </form>
    </div> <!-- /container -->
  </body>
</html>