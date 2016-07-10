<?php
$connpath = $_SERVER['DOCUMENT_ROOT'];
$seopath = $_SERVER['DOCUMENT_ROOT'];
$connpath .= "mysites/Widget Factory/setup/conn.php";
$seopath .= "mysites/Widget Factory/seo.php";

include($connpath);
include($seopath);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title><?php echo $seositetitle; ?> : Master Account: Register</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<script src="ui-bootstrap-tpls-0.14.2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href="font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet">
<script type='text/javascript' src='myapp.js'></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
</head>

<body>

<div class="wrapper_register">
	<div class="title"><span class="icon"><i class="fa fa-user-plus"></i>&nbsp;Master Account: Register</span></div>
	<div class="formarea">
	<form action="register_process.php" method="post">
		<span class="uicon"><input type="text" name="username" id="username" class="inputs" maxlength="30" value="<?php $username?>" placeholder="Enter Username"></span>
		
		<span class="passicon"><input type="password" name="password" id="password" class="inputs" maxlength="6" value="<?php $password?>" placeholder="Enter Password"></span>
		
		<span class="repassicon"><input type="password" name="repassword" id="repassword" class="inputs" maxlength="6" value="<?php $repassword?>" placeholder="Repeat Password"></span>
		
		<span class="emailicon"><input type="text" name="email" id="email" class="inputs" value="<?php $email?>" placeholder="Enter Email"></span>
		
		<span class="fnameicon"><input type="text" name="fname" id="fname" class="inputs" value="<?php $fname?>" placeholder="Enter First Name"></span>
		
		<span class="lnameicon"><input type="text" name="lname" id="lname" class="inputs" value="<?php $lname?>" placeholder="Enter Last Name"></span>
		<hr/>
		<input type="submit" class="btn btn-success" name="register" id="register" value="Register">
		<hr/>
	</form>
	</div>
</div>

</body>
</html>