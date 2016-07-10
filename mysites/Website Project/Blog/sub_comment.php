<?php
session_start();
include('setup/conn.php');
$cmtId = trim($_GET['comtId']);
$post_comment = trim($_POST['post_comment']);
$user = trim($_GET['user']);
$id = trim($_GET['uid']);
$img = trim($_GET['img']);
$postid = trim($_GET['postid']);
$pubdate = date('Y-m-d H:i:s');
$postitle = trim($_GET['title']);
$mainUser = trim($_GET['mainUser']);
$mainUserId = trim($_GET['mainUserId']);

$insertComment = "INSERT INTO subcomments (comment_id, post_id, comment_date, userId, comment_user, comments, userImg, post_title, mainUser, mainUserId) VALUES ('$cmtId', '$postid', '$pubdate', '$id', '$user', '$post_comment', '$img', '$postitle', '$mainUser', '$mainUserId')";
if ($conn->query($insertComment) === TRUE) {
	 echo "<div class='sidebarcontainer' id='recent_post' style='width: 50%; margin-left: auto; font-family: tahoma; margin-right: auto; margin-top: 100px; background-color: #e0f1f8; box-shadow: 0 1px 2px 0 #bcbfc0; border-radius: 5px;'>
	<div class='sidebar_title' style='font-size:40px; background-color: #005c5c; color: #ffffff; padding: 5px; font-family: tahoma; font-size: 20px; border-top-left-radius: 5px; border-top-right-radius: 5px; padding-left:15px;'>
	<img src='images/icons/success.png' style='position: relative; top: 0px;'> <span style='position:relative; top: -7px; font-size: 35px; font-family: tahoma;'>Success!</span></div>
	<div class='widget' style='height:115px; padding:10px; padding-top:20px; font-family: tahoma;'>
	<p class='processStats' style='position:relative; top:0px; text-align: center;'>Comment Successfully Submitted. <br/>You will be redirected after 5 seconds!</p>
	</div></div>";
	header("refresh:5; url=view_post_active.php?id=$postid&title=$postitle");
	die();
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
