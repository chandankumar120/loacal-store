<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdata";



$name=$_POST['name'];
$uname=$_POST['username'];
$email=$_POST['email'];
$number=$_POST['number'];
$pass=$_POST['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `registered-user` (`id`, `username`, `Name`, `email`, `mobile`, `password`) VALUES (NULL, '$uname', '$name', '$email', '$number', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
