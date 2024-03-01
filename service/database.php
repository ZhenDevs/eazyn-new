<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "perizinandb";

$perizinan = mysqli_connect($hostname, $username, $password, $database_name);

if($perizinan->connect_error) {
 echo "error";
}
?>