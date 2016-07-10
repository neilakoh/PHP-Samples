<?php
$connpath = $_SERVER['DOCUMENT_ROOT'];
$connpath .= "mysites/Widget Factory/setup/conn.php";

include($connpath);

$getadmin = "SELECT * FROM admin_access";
$result = $conn->query($getadmin);

if ($result->num_rows > 0) {
	header("Location: login.php");
} else {
	header("Location: register.php");
}
?>