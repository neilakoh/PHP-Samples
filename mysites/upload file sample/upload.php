<?php

//if they DID upload a file...
if($_FILES['photo']['name'])
{
	//if no errors...
	if(!$_FILES['photo']['error'])
	{
		//now is the time to modify the future file name and validate the file
		$new_file_name = strtolower($_FILES['photo']['tmp_name']); //rename file
		if($_FILES['photo']['size'] > (1024000)) //can't be larger than 1 MB
		{
			$valid_file = false;
			echo "Oops!  Your file\'s size is to large.";
		} else { 
			$valid_file = true; 
		}
	}
		
		//if the file has passed the test
		if($valid_file)
		{
			$currentdir = getcwd();
			$target = $currentdir .'/images/' . basename($_FILES['photo']['name']);
			
			if (file_exists($target)) {
				echo "Sorry, file already exists.";
			} else {
				move_uploaded_file($_FILES['photo']['tmp_name'], $target);
				echo "Congratulations!  Your file was accepted.";
			}
		}
	}
	//if there is an error...
	else
	{
		//set that to be the returned message
		echo "Ooops!  Your upload triggered the following error:  ".$_FILES['photo']['error'];
	}
?>