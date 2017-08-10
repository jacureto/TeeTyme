<html>
<head>
  <a href = "http://csis.svsu.edu/~jacureto/cis355/teetyme/teetyme/home.php">Back</a>
</head>
</html>
<?php

// connect to database
mysql_connect("localhost","jacureto","601140");
mysql_select_db("jacureto");

$id = 1; 
if(isset($_POST['img_id'])) $id = $_POST['img_id'];
// ----- display list of files available by id -----
$query = "SELECT id, name, size, type FROM tt_imgs";
$result  = mysql_query ($query);

// display list
while ($row = mysql_fetch_assoc($result)) 
{
  echo "<p>" . $row['id'] . ' ' . $row['name'] . 
    ' ' . $row['size'] . ' ' . $row['type'] . "</p>";
}
echo "<form method='post' action='fileDownload.php' >";
echo "<input name='img_id' type='text'>";
echo "<input type='submit' value='Submit'>";
echo "</form>";
$query = "SELECT name, size, content, type 
  FROM tt_imgs WHERE id=$id";
$result  = mysql_query ($query);
$name    = mysql_result($result, 0, "name");
$size    = mysql_result($result, 0, "size");
$type    = mysql_result($result, 0, "type");
$content = mysql_result($result, 0, "content");
// Header( "Content-type: $type");
// print $content;
echo "<img height='auto' width='50%'
  src='data:image/jpeg;base64," 
  . base64_encode($content) . "'>";

?>