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
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$adate = $_POST['adate'];
$ddate = $_POST['ddate'];
$no = $_POST['no'];
$noc = $_POST['noc'];
$comment = $_POST['comment'];


$sql = "INSERT INTO book (lname, fname, phone, email, adate, ddate, no, noc, comment)
VALUES ('$lname' , '$fname' , '$phone' , '$email' , '$adate' , '$ddate' , '$no' , '$noc' , '$comment' )";

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
<h1>THANKYOU for booking with us</H2>
<BR>
<BR>
<H2>WE WILL CONTACT WITH YOU SHORTLY<H2>
<H3>........look forward to the wonders..............</H3>
<BR>
<BR>
<BR>
<A HREF="index1.php">home</a>
</body>
</head>
</html>