<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include('setup/conn.php');

$result = "SELECT * FROM user_account";
$getresult = $conn->query($result);

$outp = "";

while($row = $getresult->fetch_assoc()) {
	if($outp != "") {
		$outp .= ",";
	}
	$outp .= '{"Username":"'  . $row["username"] . '",';
	$outp .= '"Email":"'   . $row["email"]        . '",';
	$outp .= '"Profile Image":"'. $row["userImg"] . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>