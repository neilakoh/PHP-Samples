<?php
include('setup/conn.php');
$getseo = "SELECT * FROM page_seo";
$result = $conn->query($getseo);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$seoid =$row['id'];
		$seositetitle =$row['page_title'];
		$seopagetitle =$row['page_title'];
		$seodescription =$row['page_description'];
		$seositeurl =$row['site_url'];
		$seoimgurl =$row['img_url'];
	}
}
?>