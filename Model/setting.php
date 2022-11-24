<?php
$servername = "localhost";
$database = "comic";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);


if ($conn->connect_error) {
  die("lỗi" . $conn->connect_error);
}
echo "thành công";
?>