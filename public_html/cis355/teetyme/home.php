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
    <title>TeeTyme</title>
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
            <form method="post" action="fileUpload.php">
              <button class="btn btn-default">File Upload</a>
            </form>
          </td>
          <td>
            <form method="post" action="fileDownload.php">
              <button class="btn btn-default">File Download</a>
            </form>
          </td>
          <td>
            <form method="post" action="json.php">
              <button class="btn btn-default">JSON</a>
            </form>
          </td>
          <td>
            <form method="post" action="logout.php">
              <button class="btn btn-basic">Log Out</a>
            </form>
          </td>
          
		</table>
		<br />
		<a href="../ER Diagram.png">E-R Diagram</a><br />
		<a href="../Process Flow.jpg">Process Flow</a><br />
		<a href="../Screen Flow.png">Screen Flow</a><br />
		<a href="../Use Case.png">Use Case</a><br />
		<a href="../Writeup.txt">Writeup</a><br />
		<a href="https://github.com/jacureto/TeeTyme">GitHub</a><br />
    
    <br />
    <u>List of Issues Pointed Out:</u><br />
    CRUD functionality: Delete, courses/persons create/read/update now all functional. Rounds create/read/update still not working.
    File Upload: now successfully implemented. Stores extensions separately for display. <br />
    Display Uploaded Image: accessible via File Download link; still in progress. Shows list of stored images, accepts user input to determine which image to show, but does not correctly display image.<br />
    AJAX/JSON: now successfully implemented. JSON.php link points to raw JSON for persons. <br />
    Phonegap: not completed. <br />
      </div>
    </div>
  </body>
</html>

