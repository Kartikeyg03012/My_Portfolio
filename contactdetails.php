<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin Home | Details</title>
<link rel="icon" href="img/Gupta Logo.jpg" />
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
	crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
	integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
	crossorigin="anonymous"></script>
<script
	src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
	crossorigin="anonymous"></script>
<script
	src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
	integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
	crossorigin="anonymous"></script>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
		aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarTogglerDemo01">

		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item active"><a class="nav-link" href="adminhome.php">Home
					<span class="sr-only"></span>
			</a></li>

			<li class="nav-item"><a class="nav-link" href="contactdetails.php">Contact Details</a></li>

			<li class="nav-item"><a class="nav-link"
				href="#"></a></li>

		</ul>

		<form class="form-inline my-2 my-lg-0">
			<a href="index.html" class="btn btn-outline-success my-2 my-sm-0">Logout</a>
		</form>
	</div>
    </nav>
    <br><hr><br>
    <?php
    
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

$sql = "SELECT fullname, number, email, sub,message, ID FROM connect";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
    $sno =1;
    ?>
    <div class="container">
    <table border="2" class="table table-striped">
        <thead class="thead-dark">
            <th>SNo.</th>
            <th>Name</th>
            <th>Number</th>
            <th>Email Id</th>
            <th>Subject</th>
            <th>Message</th>
            <th></th>
        </thead>
    <?php while($row = $result->fetch_assoc()) {?>
        <tr>
            <td><?php echo $sno ?></td>
            <td><?php echo $row["fullname"] ?></td>
            <td><?php echo $row["number"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["sub"] ?></td>
            <td><?php echo $row["message"] ?></td>
            <td><a href="delete.php?id=<?php echo $row["ID"]?>"
                class="btn btn-primary" onclick="return confirm('Are u sure')">Delete</a></td>
            <!--<td><a href="update.php?id=<?php echo $row["ID"]?>"
                class="btn btn-primary">Update</a></td>-->
        </tr>
    <?php 
$sno=$sno+1;
}
?>
    </table>
</div>
<?php
    //echo $row["fullname"]. " - Number: " . $row["number"]. " - Email Id: " . $row["email"]. " - Subject: " . $row["sub"]." - Message: " . $row["message"]."<br>";
  
} else {
  echo "0 results";
}
$conn->close();
?>
        
</body>
</html>