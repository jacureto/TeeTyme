<?php
session_start();

if(!isset($_SESSION['username'])){
	header("Location: login.php");
}


// file serves as a hub for table-based indices and information. Keeps track of and can manipulate current user.
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tee Time</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>

  </head>
  <body>
    <div class="container">
      <div class="row">
        <table>
          <tr>
            <td>
              <form method="post" action="index_persons.php">
                <button class="btn btn-success">Persons</button>
              </form>
            </td>
            
            <td>
              <form method="post" action="index_courses.php">
                <button class="btn btn-warning">Courses</button>
              </form>
            </td> 
          
            <td>
              <form method="post" action="index_rounds.php">
                <button class="btn btn-danger">Rounds</button>
              </form>
            </td>
          </tr>
        </table>
        
        <h3>Welcome to TeeTyme, <?php echo $_SESSION['username'];?></h3>
      </div>

      <table>
      <tr>
          <td>
            <form method="post" action="index_rounds.php">
              <button class="btn btn-basic">File Upload</a>
            </form>
          </td>
          <td>
            <form method="post" action="jsonExample.php">
              <button class="btn btn-default">JSON</a>
            </form>
          </td>
          <td>
            <form method="post" action="logout.php">
              <button class="btn btn-basic">Log Out</a>
            </form>
          </td>
      </div>
    </div>
  </body>
</html>

