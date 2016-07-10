<?php
include_once('config.php');

if (isset($_GET["page"])) {
	$page  = $_GET["page"]; 
	} else {
		$page=1; 
	}; 

	$start_from = ($page-1) * 2;
	
	$sql = "SELECT * FROM admin_account ORDER BY id ASC LIMIT $start_from, 2";
	
	$result = $conn->query($sql);
	
	while($row = $result->fetch_assoc()) {
		
		//This is the place where the post needs to be added
		echo "<br />";
		echo $row["username"];
		echo "<br />";
		echo $row["email"];
	}
	
	$countdata = "SELECT COUNT(username) FROM admin_account";
	$countresult = $conn->query($countdata);
	$countrow = mysqli_fetch_row($countresult); 
	$total_records = $countrow[0];
	
	$total_pages = ceil($total_records / 2);
	
	echo "<br /><br />";
	
	for ($i=1; $i<=$total_pages; $i++) { 
	
	echo "<a href='limit_post_demo.php?page=".$i."'>".$i."</a> "; 

	};
	
?>