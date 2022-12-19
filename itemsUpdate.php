<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdata";

$name=$_POST['name'];
$cat=$_POST['item-type'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$desc=$_POST['desc'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `items` (`id`, `name`, `category`, `price`, `quantity`, `description`) VALUES (NULL, '$name', '$cat', $price, '$quantity', '$desc')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
