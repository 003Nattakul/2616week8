<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ex05";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
  die("การเชื่อมต่อข้อมูลมีปัญหา: " . $conn->connect_error);
}
echo "<div class='alert alert-success'>
  <strong>Success!</strong> Indicates a successful or positive action.
</div> การเชื่อมต่อข้อมูลสำเร็จ";
?>

