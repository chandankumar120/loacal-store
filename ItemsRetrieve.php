<?php

$conn = mysqli_connect("localhost", "root", "", "userdata");
$result = mysqli_query($conn, "SELECT * FROM `items`");
 
$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
}
 
echo json_encode($data);
exit();