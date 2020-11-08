<?php
$unme=$_POST["usname"];
$pwd=$_POST["pwd"];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "kartikey";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM admin WHERE username='$unme' AND password='$pwd'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  header("Location: adminhome.php");
}else{
  header("Location: index.html");
}

?>
