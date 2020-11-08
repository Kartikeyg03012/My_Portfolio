<?php
$nme=$_POST["name"];
$mail=$_POST["email"];
$sub=$_POST["subject"];
$no=$_POST["num"];
$sms=$_POST["msg"];
$id=rand(101,100001);
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

$sql = "INSERT INTO connect (fullname,number, email,sub,message,ID)
VALUES ('$nme', '$no', '$mail','$sub','$sms','$id')";

if ($conn->query($sql) === TRUE) {
  echo "Message Send SuccessFully <a href=index.html>Go Back";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>