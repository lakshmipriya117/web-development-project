

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

$fname = (isset($_POST['fname']) ? $_POST['fname'] : '');
$lname = (isset($_POST['lname']) ? $_POST['lname'] : '');
$email = (isset($_POST['email']) ? $_POST['email'] : '');
$country = (isset($_POST['country']) ? $_POST['country'] : '');
$sub = (isset($_POST['sub']) ? $_POST['sub'] : '');


$sql = "INSERT INTO cont_insert (fname, lname, email, country, sub)
VALUES ( '$fname', '$lname', '$email', '$country', '$sub')";

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
<h1>THANKYOU</H2>
<BR>
<BR>
<H2>WE WILL CONTACT WITH YOU SHORTLY<H2>
<H3>......................</H3>

<BR>
<BR>
<BR>
<A HREF="index1.php">home</a>
</body>
</head>
</html>