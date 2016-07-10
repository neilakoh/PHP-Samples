<?php
session_start();
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
	display: block;
	margin-left: 20px;
	margin-bottom: 20px;
}

.uploadInput {
	padding: 10px; border-radius: 5px; border: 1px solid; width: 250px;
}

.proflable {
	margin-left: 20px;
	font-size:20px;
}

#box {
	margin-left:10px;
}

#label {
	font-size:20px;
	width:100px;
}

#dashboard_section {
	display: inline-block;
    width: 45%;
    text-align: center;
    position: relative;
    overflow: hidden;
    margin-left: 3%;
	vertical-align:top;
}

#login {
	font-size:20px;
}

.myprofile {
	position:relative;
	display: inline-block;
	vertical-align:top;
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
	
	#dashboard_section {
		width: 100%;
		text-align: center;
		position: relative;
		overflow: hidden;
		margin-left: 0px;
	}
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

<?php
// Check if session is active or not
if(!isset($_SESSION['userlog'])) {  
$_SESSION['userlog']=NULL; 

echo "<div class='sidebarcontainer' id='recent_post' style='width: 50%; margin-left: auto; margin-right: auto; margin-top: 100px;'>
	<div class='sidebar_title' style='font-size:40px;'>
	<img src='images/icons/error.png' style='position: relative; top: -5px;'> Error!</div>
	<div class='widget' style='height:115px; padding:10px; padding-top:20px; font-family: 'Lobster', cursive;'>
	<p class='processStats'>Sorry you are no longer active!!<br /><a href='user_login.php' class='navbar-btn btn-danger btn pull-left'>Back to Login Page</a></p>
	</div></div>"; 
die(); 
}
else
include('setup/conn.php');
// Assigning session to a variable to verify session
$user_check = $_SESSION['userlog'];

// Verify if session value exist in the database
$sessionquery = "select * from user_account where username='$user_check'";

// Execute the query and assigned it to a value called result
$result = $conn->query($sessionquery);

// Fetching the session value from the database if it exist in the database
if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$userId = $row['id'];
			
			// Re-assign the session
			$_SESSION['userlog']= $user_check;
			
			// Pass the session value for usage
			$login_session = $_SESSION['userlog'];
    }
}
$conn->close();

?>

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
		<a href="main.php?page=1" class="navbar-brand">Blog Website</a>
		</div>
		
		
		<!--CREATING THE NAVIGATION/MENU-->
		<div class="collapse navbar-collapse navHeaderCollapse">
			
			<!--POSITION THE MENU TO THE RIGHT-->
			<ul class="nav navbar-nav navbar-right">
				
				<!--CREATING A DROPDOWN MENU-->
				<li class="dropdown">
				
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon"><i class="fa fa-plus-bars"></i>&nbsp;Welcome <b><?php echo $login_session; ?></b></span> <b class="caret"></b></a>
					
					<ul class="dropdown-menu">
						<li><a href="user_dashboard.php"><span class="icon"><i class="fa fa-dashboard"></i>&nbsp;My Dashboard</span></a></li>
						
						<li><a href="cmt_topics.php"><span class="icon"><i class="fa fa-comments-o"></i>&nbsp;Commented Topics
						<?php
							include('setup/conn.php');
							$countcomments = "SELECT COUNT(*) as Total FROM comments WHERE userId = '$userId'";
							$countexecute = $conn->query($countcomments);
							$countresult = mysqli_fetch_array($countexecute, MYSQLI_ASSOC);
							$respondedComments = $countresult['Total'];
							echo "<span style='padding: 5px; text-align: center; border-radius: 3px; background-color:#ffffff; color: #000000; width: 25px; margin-left:10px;'>$respondedComments</span>";
						?>
						</span></a></li>
						<li><a href="rspnd_topics.php"><span class="icon"><i class="fa fa-commenting"></i>&nbsp;Responded Comments
						<?php
							include('setup/conn.php');
							$countcomments = "SELECT COUNT(*) as Total2 FROM subcomments WHERE mainUserId = '$userId'";
							$countexecute = $conn->query($countcomments);
							$countresult = mysqli_fetch_array($countexecute, MYSQLI_ASSOC);
							$respondedComments = $countresult['Total2'];
							echo "<span style='padding: 5px; text-align: center; border-radius: 3px; background-color:#ffffff; color: #000000; width: 25px; margin-left:10px;'>$respondedComments</span>";
						?>
						</span></a></li>
						<li role="separator" class="divider" style="border: 1px inset #080808;"></li>
						<li><a href="logout.php"><span class="icon"><i class="fa fa-sign-out"></i>&nbsp;Logout</span></a></li>
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
			<div class="sidebar_title" style="font-size:40px;">My Dashboard</div>
				<div class="widget" style="padding:10px; padding-top:20px; font-family: 'Lobster', cursive;">
				
					<div class="sidebarcontainer" id="dashboard_section" style="top: 0px;">
						<div class="sidebar_title" style="font-size:20px;">Posts I Commented</div>
							<div class="widget" style="padding:10px; font-family: 'Lobster', cursive;">
								<?php
									include('setup/conn.php');
									$commentedpost = "SELECT * FROM comments WHERE userId = '$userId' ORDER BY comment_date DESC LIMIT 0, 10";
									$cmtdpst = $conn->query($commentedpost);
					
									if ($cmtdpst->num_rows > 0) {
										while($cp = $cmtdpst->fetch_assoc()) {
											$postid =$cp['post_id'];
											
											$selectpost = "SELECT * FROM posts WHERE post_id = '$postid'";
											$displaypost = $conn->query($selectpost);
											
											if ($displaypost->num_rows > 0) {
												while($dp = $displaypost->fetch_assoc()) {
													$postitle = $dp['post_title'];
													$postid = $dp['post_id'];
													echo "<div class='rplink' style='text-align:left;'><a href='view_post_active.php?id=$postid&title=$postitle' target='_new'><span class='icon'><i class='fa fa-commenting'></i>&nbsp;<b>$postitle</a></b></span></div>";
												}
											}
										}
									} else {
										echo "No Comments Yet";
									}
								?>
						</div>
					</div>
					
					<div class="sidebarcontainer" id="dashboard_section" style="top: 0px;">
						<div class="sidebar_title" style="font-size:20px;">Responded Comments</div>
							<div class="widget" style="padding:10px; font-family: 'Lobster', cursive;">
								<?php
									include('setup/conn.php');
									
											$selectpost = "SELECT * FROM subcomments WHERE mainUserId = '$userId' ORDER BY comment_date DESC LIMIT 0, 10";
											$displaypost = $conn->query($selectpost);
											
											if ($displaypost->num_rows > 0) {
												while($dp = $displaypost->fetch_assoc()) {
													$postid = $dp['post_id'];
													$cmtuser = $dp['comment_user'];
													$cmtdate = $dp['comment_date'];
													$postitle = $dp['post_title'];
													echo "<p style='text-align:left; font-size:18px;'><span class='icon'><i class='fa fa-commenting'></i>&nbsp;User <b><a href='#'>$cmtuser</a></b> has responded to your comment about <b><a href='#'>$postitle</a></b> last <b><a href='#'>$cmtdate</a></b></span><p>";
												}
											} else {
												echo "No Comments Yet";
											}
								?>
						</div>
					</div>
					
					<div class="sidebarcontainer" id="profile_section" style="top: 0px;">
						<div class="sidebar_title" style="font-size:20px;">My Profile</div>
							<div class="widget" style="padding:10px; font-family: 'Lobster', cursive;">
								<?php
									include('setup/conn.php');
									include('setup/conn.php');
									$selectProfile = "SELECT * FROM user_account WHERE id = '$userId'";
									$getProfile = $conn->query($selectProfile);
									
									if ($getProfile->num_rows > 0) {
										while($row = $getProfile->fetch_assoc()) {
											$username = $row['username'];
											$password = $row['password'];
											$email = $row['email'];
											$profileImage = $row['userImg'];
										}
									}
								?>
								
								<!-- PRIVIEW AN IMAGE BEFORE UPLOADING CODE STARTS HERE -->
								<script type="text/javascript">
									function readURL(input) {
										if (input.files && input.files[0]) {
											var reader = new FileReader();

											reader.onload = function (e) {
												$('#profilePic').attr('src', e.target.result);
											}

											reader.readAsDataURL(input.files[0]);
										}
									}
								</script>
								
								<div id="profile_pic" class="myprofile">
									<form action="profile.php?id=<?php echo $userId; ?>" runat="server" method="post" enctype="multipart/form-data">
									<img src="<?php echo $profileImage; ?>" id="profilePic" height="200" width="250" style="border: 5px solid #ffffff; box-shadow: 0px 0px 2px 0px #000000;">
									<div style="font-size:14px;">Select an Image: <input type="file" class="uploadInput btn-success" name="file" id="file" onchange="readURL(this);"></div>
									<input type="submit" name="profilepic" id="profilepic" class="btn-default btn pull-right" value="Update Profile Image">
									</form>
								</div>
								
								<div id="profile_info" class="myprofile">
									<form action="updateprofile.php?id=<?php echo $userId; ?>" method="post">
									<span class="proflable">Password:</span> <input type="password" name="pass" id="pass" class="inputs" maxlength="12" value="<?php echo $password;?>">
									<span class="proflable"> Repeat Password:</span> <input type="password" name="repass" id="pass" class="inputs" maxlength="8" value="<?php $repass?>">
									<span class="proflable">Email:</span> <input type="text" name="email" id="email" class="inputs" maxlength="30" value="<?php echo $email;?>">
									<input type="submit" name="updateinfo" id="updateinfo" class="btn-danger btn pull-right" value="Update Profile Info"></div>
									</form>
								</div>
								
								</div>
								
								<!-- PRIVIEW AN IMAGE BEFORE UPLOADING CODE ENDS HERE -->
						</div>
					</div>
					
				</div>
		</div>
	</div>
		
	<div class="col-md-1">
			
	</div>
</div>
<!--CONTENT AREA ENDS HERE-->



<!--FOOTER CODE STARTS HERE-->

<div class="navbar navbar-inverse navbar-static-bottom" id="footerbar">

	<div class="container">
		<p class="navbar-text pull-left">Site Crated by Neil Te</p>
		<a href="" class="navbar-btn btn-danger btn pull-right">Subscribe</a>
	</div>

</div>

<!--FOOTER CODE ENDS HERE-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html> 