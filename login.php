<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdata";

$uname = $_POST['username'];

$pass = $_POST['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `registered-user` WHERE `username`= '$uname' AND `password`='$pass'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
    header("location: add-product.html");
} else {
    echo "<h1> Login failed. Invalid username or password.</h1>";
}
$conn->close();
