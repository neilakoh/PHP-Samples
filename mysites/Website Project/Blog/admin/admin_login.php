<?php
include('setup/conn.php');
?>

<!DOCTYPE html>
<html>
<title>Website Project</title>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href="images/icons/font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet">

<style>

* {
	box-sizing: border-box;
}

.pagelinks {
	font-size: 20px;
    margin-top: 0;
    padding-bottom: 20px;
    position: relative;
    text-align: center;
}

.pagelinks a:link {
	background: #005c5c none repeat scroll 0 0;
    border-radius: 2px;
    padding: 5px 15px;
	font-family: 'Lobster', cursive;
}

.pagelinks a:visited {
	background: #005c5c none repeat scroll 0 0;
    border-radius: 2px;
    padding: 5px 15px;
	font-family: 'Lobster', cursive;
}

.pagelinks a:hover {
	background: #080808 none repeat scroll 0 0;
    color:#ffffff;
	text-decoration:none;
	font-family: 'Lobster', cursive;
}

:target {
    color:#ffffff;
	text-decoration:none;
	font-family: 'Lobster', cursive;
	text-shadow:#000000 1px 0 1px;
}

/*MAKE THE FB LIKE BOX RESPONSIVE STARS HERE*/
#likebox-wrapper * {
   width: 100% !important;
}

.fb-page, 
.fb-page span, 
.fb-page span iframe[style] { 
    width: 100% !important; 
}
/*MAKE THE FB LIKE BOX RESPONSIVE ENDS HERE*/

.row {
    margin-left: auto!important;
    margin-right: auto!important;
}

.navbar-inverse {
    background-color: #005c5c!important;
    border-bottom: 3px solid #080808!important;
    border-color: #080808!important;
}

.navbar {
    border-radius: 0!important;
}

.dropdown-menu {
	background-color: #005c5c;
}

.rplink a {
	font-size:20px;
	color:#005c5c;
}

.rplink a:hover {
text-decoration:none;
text-shadow: 0px 1px 0px #080808;
}

.dropdown-menu > li > a {
	color: #ffffff!important;
	padding: 10px 20px!important;
}

.navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus, .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover {
		background-color:#080808!important;
		color:#009999!important;
	}

.navbar-brand {
	color: #ffffff !important;
    font-family: 'Lobster', cursive;
    font-size: 30px!important;
    text-shadow: 0 5px 5px #000000!important;
}

.posttitlelink:hover {
	text-shadow: 0 2px 1px #000000;
}

.navbar-inverse .navbar-nav > li > a {
	color: #ffffff!important;
}

.navbar-inverse .navbar-nav > li > a:hover {
	background-color:#080808!important;
	color:#009999!important;
}

.navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:focus, .navbar-inverse .navbar-nav > .active > a:hover {
	background-color:#080808!important;
	color:#009999!important;
}

.tinylinks:hover {
	background-color:#080808!important;
	color:#E0F1F8!important;
}

.sidebar_title {
	background-color: #005c5c;
    color: #ffffff;
    padding: 5px;
	font-family: 'Lobster', cursive;
	font-size: 20px;
	border-top-left-radius: 5px;
    border-top-right-radius: 5px;
	padding-left:15px;
}

.sidebarcontainer {
	background-color: #e0f1f8;
    border-radius: 5px;
    margin-bottom: 10px;
    width: 100%;
	box-shadow: 0 1px 2px 0 #bcbfc0;
}

.fa-search {
	position:relative;
	left: 25px;
}

input#search:hover, input#search:focus {
	box-shadow: 0 0 5px 0 #000000;
}

#footerbar{
	bottom: 0 !important;
    margin-bottom: 0!important;
    padding-top: 0!important;
    position: relative !important;
}

.cols {
	display: inline-block;
}

.rows {
	margin-bottom:10px;
}

.inputs {
	padding: 10px; border-radius: 5px; border: 1px solid; width: 250px;
}

#box {
	margin-left:10px;
}

#label {
	font-size:20px;
	width:100px;
}

#login {
	font-size:20px;
}

@media (max-width: 767px) {
	
	.navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
	color: #ffffff;
    margin-left: 75px;
    padding-bottom: 10px;
    padding-top: 10px;
	}
	
	.navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus, .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover {
		background-color:#080808!important;
		color:#009999!important;
	}
	
	#login {
    position: relative;
    right: -50px;
}

</style>

</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--NAVIGATION BAR CODE STARTS HERE-->

<div class="navbar navbar-inverse navbar-static-top" id="topbar">
	<div class="container">
		
		<!--CREATING A DIV TAG THAT WILL HOLD THE WEBSITE TITLE AND THE NAVIGATION/MENU-->
		<div class="navbar-header">
		
		<!--CREATING A BUTTON THAT WILL SHOW IF WEBSITE IS BEING VIEWED ON MOBILE DEVICES-->
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
		
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		
		</button>
		
		<!--CREATING A WEBSITE TITLE-->
		<a href="index.php?page=1" class="navbar-brand">Blog Website</a>
		</div>
		
		
		<!--CREATING THE NAVIGATION/MENU-->
		<div class="collapse navbar-collapse navHeaderCollapse">
			
			<!--POSITION THE MENU TO THE RIGHT-->
			<ul class="nav navbar-nav navbar-right">
			
				<li><a href="index.php?page=1"><span class="icon"><i class="fa fa-home"></i>&nbsp;Home</span></a></li>
				<li><a href="user_login.php"><span class="icon"><i class="fa fa-user"></i>&nbsp;Login</span></a></li>
				<li><a href="user_register.php"><span class="icon"><i class="fa fa-user-plus"></i>&nbsp;Register</span></a></li>
				<li><a href="about_us.php"><span class="icon"><i class="fa fa-info-circle"></i>&nbsp;About Us</span></a></li>
				<li><a href="contact.php"><span class="icon"><i class="fa fa-envelope-o"></i>&nbsp;Contact Us</span></a></li>
				
				<!--CREATING A DROPDOWN MENU-->
				<li class="dropdown">
				
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon"><i class="fa fa-plus-circle"></i>&nbsp;More</span> <b class="caret"></b></a>
					
					<ul class="dropdown-menu">
						<li><a href="#">Online Support</a></li>
						<li><a href="#">Remote Fix</a></li>
						<li><a href="#">Visit to Fix</a></li>
						<li><a href="#">Troubleshoot</a></li>
					</ul>
					
				</li>
				
			</ul>
		</div>
	</div>
</div>

<!--NAVIGATION BAR CODE ENDS HERE-->

<!--CONTENT AREA STARTS HERE-->
<div class="row">

</div>

<div class="row">
	<div class="col-md-1">
			
	</div>

	<div class="col-md-10">
		<div class="sidebarcontainer" id="recent_post">
				<div class="sidebar_title" style="font-size:40px;">Admin Login</div>
				<div class="widget" style="padding:10px; padding-top:20px; font-family: 'Lobster', cursive;">
				
					<form action="login_process.php" method="post">
						<div class="rows" id="username">
							<div class="cols" id="label">Username :</div>
							<div class="cols" id="box"><input type="text" name="user" id="user" class="inputs" value="<?php $user?>"></div>
						</div>
						<div class="rows" id="password">
							<div class="cols" id="label">Password :</div>
							<div class="cols" id="box"><input type="password" name="pass" id="pass" class="inputs" value="<?php $pass?>"></div>
						</div>
						<div class="cols" id="label"></div>
						<div class="cols" id="box"><input type="submit" name="login" id="login" value="Login Now">
						<div class="forgotpass" style="margin-top:10px; font-size: 20px"><a href="forgotpass.php">Forgot Password?</a></div></div>
					</form>
		
				</div>
			</div>
	</div>
		
		<div class="col-md-1">
			
		</div>
	</div>
<!--CONTENT AREA ENDS HERE-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html> 