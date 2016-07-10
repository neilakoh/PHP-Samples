<!DOCTYPE html>
<html lang="en-US">
<head>

<title>Software</title>

<!--META TAGS-->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!--JAVASCRIPTS-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type='text/javascript' src='validation/validation.js'></script>

<!--CSS LINKS-->

</head>

<body>
	<form id="register">
		<input type="text" class="username" id="username" placeholder="Enter Username" onchange="validation.usernameChecker()" />
		<div class="username_validation"></div>
		
		<input type="email" class="email" id="email" name="email" placeholder="Enter E-Mail" onchange="validation.emailChecker()" />
		<div class="email_validation"></div>
		
		<input type="password" class="password" id="password" name="password" placeholder="Enter Password" onchange="validation.defaultPasswordChecker()" />
		<div class="password_validation"></div>
		
		<input type="password" class="confirm_password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" onchange="validation.confirmPasswordChecker()" />
		<div class="confirm_password_validation"></div>
		
		<input type="submit" name="validate" />
	</form>
	<script type='text/javascript' src='validation/preventDefault.js'></script>
</body>

</html>