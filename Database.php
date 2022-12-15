<?php
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "local-store";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `items-details`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo "<br> id: " . $row["id"] . " - Name: " . $row["name"] . " " . $row["price"] . $row["info"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();*/


$conn = mysqli_connect("localhost", "root", "", "local-store");
$result = mysqli_query($conn, "SELECT * FROM `items-details`");
 
$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
}
 
echo json_encode($data);
exit();