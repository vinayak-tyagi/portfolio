<?php
$testConnection = mysqli_connect('localhost:3325', 'root', '');
if (!$testConnection) {
die('Error: ' . mysqli_connect_error());
}
echo 'Database connection working!';
mysqli_close($testConnection);
?>