<?php
session_start();
include('setup/conn.php');
define('UPLOAD_DIR', 'images/profileimages/');

$accId = trim($_GET['id']);
$test = isset($_POST['file']);

if($_FILES['file']['tmp_name']==''){
	echo "<div class='sidebarcontainer' id='recent_post' style='width: 50%; margin-left: auto; font-family: tahoma; margin-right: auto; margin-top: 100px; background-color: #e0f1f8; box-shadow: 0 1px 2px 0 #bcbfc0; border-radius: 5px;'>
	<div class='sidebar_title' style='font-size:40px; background-color: #005c5c; color: #ffffff; padding: 5px; font-family: tahoma; font-size: 20px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding-left:15px;'>
	<img src='images/icons/error.png' style='position: relative; top: 0px;'> <span style='position:relative; top: -7px; font-size: 35px; font-family: tahoma;'>Error!</span></div>
	<div class='widget' style='height:115px; padding:10px; padding-top:20px; font-family: tahoma;'>
	<p class='processStats' style='position:relative; top:0px; text-align: center;'>Please fill out all the boxes. <br/>You will be redirected back after 5 seconds!</p>
	</div></div>";
	header("refresh:5; url=user_dashboard.php");
	die();
} else {

	if($_FILES['file']['name'])
	{
		//if no errors...
		if(!$_FILES['file']['error'])
		{
			//now is the time to modify the future file name and validate the file
			$new_file_name = strtolower($_FILES['file']['tmp_name']); //rename file
			if($_FILES['file']['size'] > (1024000)) //can't be larger than 1 MB
			{
				$valid_file = false;
				echo "Oops!  Your file\'s size is to large.";
			} else { 
				$valid_file = true; 
			}
		}
		
		if($valid_file) {
			$fileName = $_FILES['file'];
			$file = $fileName['name'];
			// function to rename file
			function update_file_name($file) 
			{
				$pos = strrpos($file,'.');
				$ext = substr($file,$pos); 
				$dir = strrpos($file,'/');
				$dr  = substr($file,0,($dir+1)); 

				$arr = explode('/',$file);
				$fName = substr($arr[(count($arr) - 1)], 0, -strlen($ext));

				$exist = FALSE;
				$i = 2;
				
				while(!$exist)
				{
					$file = $dr.$fName.'_'.$i.$ext;
				  
					if(!file_exists($file))
					$exist = TRUE;
				  
					$i++;
				}
				return $file;
			}

		if(file_exists(UPLOAD_DIR . $fileName['name'])) 
			{
				$updatedFileName = update_file_name(UPLOAD_DIR.$fileName['name']);
				$newimgfile = $updatedFileName;
				move_uploaded_file($fileName['tmp_name'], $updatedFileName);
				$sql = "UPDATE user_account SET userImg='$newimgfile' WHERE id='$accId'";
				
				if ($conn->query($sql) === TRUE) {
					echo "<div class='sidebarcontainer' id='recent_post' style='width: 50%; margin-left: auto; font-family: tahoma; margin-right: auto; margin-top: 100px; background-color: #e0f1f8; box-shadow: 0 1px 2px 0 #bcbfc0; border-radius: 5px;'>
					<div class='sidebar_title' style='font-size:40px; background-color: #005c5c; color: #ffffff; padding: 5px; font-family: tahoma; font-size: 20px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding-left:15px;'>
					<img src='images/icons/success.png' style='position: relative; top: 0px;'> <span style='position:relative; top: -7px; font-size: 35px; font-family: tahoma;'>Success!</span></div>
					<div class='widget' style='height:115px; padding:10px; padding-top:20px; font-family: tahoma;'>
					<p class='processStats' style='position:relative; top:0px; text-align: center;'>Successfully Updated Profile Picture. <br/>You will be redirected back after 5 seconds!</p>
					</div></div>";
					header("refresh:5; url=user_dashboard.php");
					die();
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
			else
			{
				$newimgfile = UPLOAD_DIR.$fileName['name'];
				move_uploaded_file($fileName['tmp_name'], UPLOAD_DIR.$fileName['name']);
				$sql = "UPDATE user_account SET userImg='$newimgfile' WHERE id='$accId'";
				
				if ($conn->query($sql) === TRUE) {
					echo "<div class='sidebarcontainer' id='recent_post' style='width: 50%; margin-left: auto; font-family: tahoma; margin-right: auto; margin-top: 100px; background-color: #e0f1f8; box-shadow: 0 1px 2px 0 #bcbfc0; border-radius: 5px;'>
					<div class='sidebar_title' style='font-size:40px; background-color: #005c5c; color: #ffffff; padding: 5px; font-family: tahoma; font-size: 20px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding-left:15px;'>
					<img src='images/icons/success.png' style='position: relative; top: 0px;'> <span style='position:relative; top: -7px; font-size: 35px; font-family: tahoma;'>Success!</span></div>
					<div class='widget' style='height:115px; padding:10px; padding-top:20px; font-family: tahoma;'>
					<p class='processStats' style='position:relative; top:0px; text-align: center;'>Successfully Updated Profile Picture. <br/>You will be redirected back after 5 seconds!</p>
					</div></div>";
					header("refresh:5; url=user_dashboard.php");
					die();
					die();
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			
				//Message: SUCCESS UPLOAD
			}
		}
	}
}
?>
