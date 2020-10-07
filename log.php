<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "index";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$uname = (isset($_POST['uname']) ? $_POST['uname'] : '');
$pass = (isset($_POST['pass']) ? $_POST['pass'] : '');

$sql = "INSERT INTO log_insert (uname, pass)
VALUES ('$uname' , '$pass' )";

if ($conn->query($sql) === TRUE) {
    echo " SUCCESSFUL...........";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
<body>
<h1>book in now </H2>
<BR>
<BR>

<H3>........look forward to the wonders..............</H3>
<BR>
<BR>
<BR>
<A HREF="book1.php">home</a>
</body>
</head>
</html>