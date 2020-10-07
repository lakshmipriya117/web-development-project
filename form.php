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
$gmail = (isset($_POST['umail']) ? $_POST['umail'] : '');
$uname = (isset($_POST['uname']) ? $_POST['uname'] : '');
$phone = (isset($_POST['phone']) ? $_POST['phone'] : '');
$pass = (isset($_POST['pass']) ? $_POST['pass'] : '');
$repass = (isset($_POST['repass']) ? $_POST['repass'] : '');


$sql = "INSERT INTO sign_insert ( umail, uname, phone, pass, repass)
VALUES ( '$gmail', '$uname', '$phone', '$pass', '$repass' )";

if ($conn->query($sql) === TRUE) {
    echo "SIGN UP SUCCESSFUL...........LOGIN AND BOOK NOW";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



<!DOCTYPE html>
<html>
<head>
<body>

<BR>
<BR>
<H2>login now<H2>
<H3>........book with us..............</H3>
<BR>
<BR>
<BR>
<A HREF="index1.php">home</a>
</body>
</head>
</html>