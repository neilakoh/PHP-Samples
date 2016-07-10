<?php
ini_set('max_execution_time', 300);
?>
<!DOCTYPE html>
<html lang="en-US">
<head><title>Social Media Profile Button Connector</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta property="og:title" content="Social Media Profile Button Connector"/>
<meta property="og:url" content="http://webtester.acoxi.com/SMPBC/index.php"/>
<meta property="og:image" content="http://webtester.acoxi.com/SMPBC/thumbnail.jpg"/>
<meta property="og:description" content="Connect your social media profile to your website with this free tool! Connect your social media profile, page, timeline and so on to your website through these cool buttons."/>
<meta name="og:image" content="http://webtester.acoxi.com/SMPBC/thumbnail.jpg" />
<meta name="og:title" content="Social Media Profile Button Connector" />
<meta name="og:description" content="Connect your social media profile to your website with this free tool! Connect your social media profile, page, timeline and so on to your website through these cool buttons." />
<meta name="og:url" content="http://webtester.acoxi.com/SMPBC/index.php" />
<meta property="og:image" content="http://webtester.acoxi.com/SMPBC/thumbnail.jpg" />

<link href="css/bootstrap.min.css" rel="stylesheet">
<script type='text/javascript' src='http://code.jquery.com/jquery-compat-git.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="shortcut icon" href="favicon.ico">
<script type="text/javascript" src="ZeroClipboard.js"></script>
<script type='text/javascript'>
$(window).on('load', function() {
$("[data-collapse-group='myDivs']").click(function () {
    var $this = $(this);
    $("[data-collapse-group='myDivs']:not([data-target='" + $this.data("target") + "'])").each(function () {
        $($(this).data("target")).removeClass("in").addClass('collapse');
    });
});
});
</script>

<script type='text/javascript'>
$(document).ready(function(){
$("#getwidget").click(function(){
var divHtml = $('.preview').prop('outerHTML');
document.getElementById("clipboard_textarea").value = divHtml;
//$('textarea').val(divHtml);
});
});
</script>

<script type='text/javascript'>
$(document).ready(function(){
$("#clear").click(function(){
    document.getElementById("message").value = "";
});
});
</script>

<style>
*{
	box-sizing: border-box;
	margin-left: auto;
	margin-right: auto;
	font-family: tahoma;
}

.wrapper {
	overflow: hidden;
	max-width: 1020px;
	width: 100%;
	height: auto;
	margin-top: 15px;
}

.styleListBtn {
	padding: 5px;
	position:relative;
	display: block;
}

.header {
	text-align: center;
}

#sitetitle {
	font-size: 22px;
	color: #002800;
	text-shadow: 0 0px 2px #002800;
}

#header {
	padding: 15px;
	background: #def;
	border-radius: 10px;
}

#navigation {
	font-size: 16px;
	color: #000000;
}

.well {
	margin-top: 10px;
}

.cols {
	display: inline-block;
}

.rows {
	margin-bottom:10px;
	text-align: left;
	position:relative;
}

.inputs {
	padding: 10px; border-radius: 5px; border: 1px solid; width: 250px;
}

#label {
	font-size:20px;
	width:200px;
}

.content {
	box-shadow: 0px 0px 0px 0px #000000;
}

.socialmedias {
	position: absolute; vertical-align: top; right: 10px;
	-ms-transform: scale(2); /* IE */
	-moz-transform: scale(2); /* FF */
	-webkit-transform: scale(2); /* Safari and Chrome */
	-o-transform: scale(2); /* Opera */
}

.sm_wrapper {
	position:relative;
	display: inline-block;
}

h1 {
    font-family: Helvetica, Arial, sans-serif;
    font-weight: bold;
    font-size: 2em;
    line-height: 1em;
}
.inset-text {
    /* Shadows are visible under slightly transparent text color */
    color: rgba(10,60,150, 0.8);
    text-shadow: 1px 4px 6px #def, 0 0 0 #000, 1px 4px 6px #def;
}
/* Don't show shadows when selecting text */
::-moz-selection { background: #5af; color: #fff; text-shadow: none; }
::selection { background: #5af; color: #fff; text-shadow: none; }


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
	width:200px;
}

</style>
<script type="text/javascript" src="ZeroClipboard.js"></script>
</head>

<body>

<div class="wrapper" style="margin-bottom:140px;">
	<div class="content" id="header">
		<div class="header" id="sitetitle"><h1 class="inset-text">Social Media Profile Button Connector</h1></div>
		<p style="text-align:center; font-size: 20px; margin-top: 0px; position: relative;">Connect your social media profile to your website with this free tool!</p>
		<div class="header" id="navigation">
		<a class="btn btn-info" href="index.php">Home</a> 
		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#about" data-collapse-group="myDivs">About</button> 
		<button type="button" id="clear" class="btn btn-info" data-toggle="collapse" data-target="#contact" data-collapse-group="myDivs">Contact</button>
		<a class="btn btn-info" href="styles.php">Styles</a>
		
		<div class="collapse" id="about">
			<div class="well">
			<p style="text-align:left;"><b>Social Media Profile Button Connector</b> is a free tool that can create a link between your website and your social media profile, page, timeline and so on through cool buttons. The tool is very easy to use and it is forever free.</p>
			</div>
		</div>
		
		<div class="collapse" id="contact">
			<div class="well">
				<form action="sendmail.php" method="post">
					<div class="rows" id="name">
						<div class="cols" id="label">Name :</div>
						<div class="cols" id="box"><input type="text" name="name" id="name" class="inputs" value="<?php $name?>"></div>
					</div>
					
					<div class="rows" id="email">
						<div class="cols" id="label">Email :</div>
						<div class="cols" id="box"><input type="text" name="email" id="email" class="inputs" value="<?php $email?>"></div>
					</div>
					
					<div class="rows" id="message">
						<div class="cols" id="label" style="vertical-align: top;">Message :</div>
						<div class="cols" id="box"><textarea type="text" name="message" class="inputs" id="message" style="width: 100%; resize:none;" rows="5" cols="70" value="<?php $message; ?>"></textarea></div>
					</div>
					
					<div class="rows" id="security">
						<div class="cols" id="label" style="vertical-align: top;">Answer the question : 5 + 4 = </div>
						<div class="cols" id="box"><input type="text" name="security" id="security" class="inputs" value="<?php $security?>"></div>
					</div>
					
					<div class="rows" id="send">
						<div class="cols" id="label"></div>
						<div class="cols" id="box"><input type="submit" class="btn btn-info" name="send" id="send" value="Send"></div>
					</div>
				</form>
			</div>
		</div>
		
		</div>
	</div>
	
	<div class="content" id="buttonStyle">
		<div class="steps" id="step1" style="background: #def; padding: 15px; margin-top: 15px; border-radius: 10px;"><b>Instruction: </b>Just copy the code of the alignment you want and paste it in between head tag of your HTML code.</div>
	</div>
	
	<div class="content" id="buttonStyle" style="background: #def; padding: 15px; margin-top: 15px; border-radius: 10px;">
		<div class="lists" id="styleList">
			STYLES HERE
		</div>
	</div>
	
	<br/>
	<br/>
	
</div>

<div class="navbar navbar-inverse navbar-fixed-bottom" id="footerbar">
	<div class="container">
		<p style="text-align:center; padding-top:20px; padding-bottom:10px; color:#ffffff;">Copyright 2015 Social Media Profile Button Connector. All Rights Reserved.<br/>Hosted by: <a href="https://www.grendelhosting.com/" target="_new">Grendel Hosting</a>. Developed by: Neil Anthony Te</p>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>