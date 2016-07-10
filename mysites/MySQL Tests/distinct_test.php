<!--DISTINCT statement is used to eliminate duplicates, in the example below
there are 4 data and each two of them have the same address. The DISTINCT statement
will only display the data once and ignores the duplicates-->
<?php
include('setup/conn.php');

$sql = "SELECT DISTINCT address FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$address = $row['address'];
		echo "$address <br>";
	}
}
?>