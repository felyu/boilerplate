<?php
// For production
// $servername = "";
// $database = "";
// $username = "";
// $password = "";

// For localhost  only
// $servername = "localhost";
// $database = "";
// $username = "root";
// $password = "root";

$conn = mysqli_connect($servername, $username, $password, $database);
$stmt = mysqli_stmt_init($conn);
?>
