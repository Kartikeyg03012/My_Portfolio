<?php
$kuch=$_GET["id"];
//echo "name = ".$nme." ".$mail." ".$sub." ".$no." ".$sms;
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

$sql = "DELETE from connect where ID='$kuch'";

if ($conn->query($sql) === TRUE) {
  echo "Delete Send SuccessFully";
  header("Location: contactdetails.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>