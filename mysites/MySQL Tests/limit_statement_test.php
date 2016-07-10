<?php
include('setup/conn.php');

if(isset($_POST["input"])) {
	$val= $_POST['input'];
	if(!isset($val) || trim($val) == '') {
        echo 'please enter something';
    }else{
        $sql = "SELECT * FROM employee LIMIT 2";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$fname = $row['fname'];
				$lname = $row['lname'];
				$address = $row['address'];
				echo "First Name: $fname | Last Name: $lname | Address: $address <br/>";
			}
		}
    }
}
?>

<html>
<title></title>
<head></head>
<body>

<form action="limit_statement_test.php" method="post">
<input name="input" type="text" id="input" />
<input name="pass" type="submit" value="Set Limit"/>
</form>

</body>
</html>