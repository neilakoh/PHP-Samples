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
<link rel="shortcut icon" href="favicon.ico">

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

<style>
*{
	box-sizing: border-box;
	margin-left: auto;
	margin-right: auto;
	font-family: Helvetica, Arial, sans-serif;
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
	position: relative;
	right:5px;
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

a[data]:hover:after {
  content: attr(data);
  padding: 4px 8px;
  color: #def;
  position: absolute;
  left: 0;
  top: 100%;
  white-space: nowrap;
  z-index: 2;
  border-radius: 5px ;
  background: #222;
}
</style>

</head>

<body>

<div class="wrapper">
	<div class="content" id="header">
		<div class="header" id="sitetitle"><h1 class="inset-text">Social Media Profile Button Connector</h1></div>
		<p style="text-align:center; font-size: 20px; margin-top: 0px; position: relative;">Connect your social media profile to your website with this free tool!</p>
		<div class="header" id="navigation">
		<a class="btn btn-info" href="index.php">Home</a> 
		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#about" data-collapse-group="myDivs">About</button> 
		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#contact" data-collapse-group="myDivs">Contact</button>
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
		<div class="steps" id="step1" style="background: #def; padding: 15px; margin-top: 15px; border-radius: 10px;"><b>Step 1: </b>Select button style you want to add on your website by checking the boxes.</div>
	</div>
	
	<div class="content" id="buttonStyle">
		<div class="advert" id="advert" style="background: #def; padding: 15px; margin-top: 15px; width:728px; height: 60px;"></div>
	</div>
	
	<form action="step2.php" method="post">
	
	<div class="content" id="buttonStyle" style="background: #def; padding: 15px; margin-top: 15px; border-radius: 10px;">
		<div class="lists" id="styleList">
			<?php
			include('setup/conn.php');
			$getstyles = "SELECT * FROM icongroup";
			$result = $conn->query($getstyles);
			
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$styleId = $row['id'];
					$stylesNames = $row['name'];
					$target = $row['target'];
					echo "<div class='styleListBtn'><button type='button' class='btn btn-info' data-toggle='collapse' data-target='#$target' data-collapse-group='myDivs'>$stylesNames</button></div>";
			?>
			
			<div class="lists" id="iconList">
				<div class="collapse" id="<?php echo $target; ?>">
					<div class="well">
					<div class="iconwrapper" style="text-align: left; margin-left: 20px; padding: 5px;">
						<?php
							include('setup/conn.php');
							$getstyles2 = "SELECT * FROM icons WHERE styleSetId='$styleId' ORDER BY iconName ASC";
							$result2 = $conn->query($getstyles2);
							
							if ($result2->num_rows > 0) {
								while($row2 = $result2->fetch_assoc()) {
									$iconId = $row2['iconId'];
									$iconName = $row2['iconName'];
									$iconUrl = $row2['iconUrl'];
									
									echo "<div class='sm_wrapper'>
									<input type='checkbox' name='socialmedias[]' class='socialmedias' id='$iconId' value='$iconId'>
									<a href='#' data='$iconName'><label for='$iconId'><img src='$iconUrl' height='48' width='48' style='margin-right:35px; margin-bottom:10px;' alt='$iconName'></label></a>
									</div>";
								}
							}
						?>
					</div>
					</div>
				</div>
			</div>
			
			<?php
				}
			}
			?>
		</div>
	</div>
	
	<div class="toStep2" style="text-align: center; margin-top:10px; margin-bottom:150px;"><input type="submit" class='btn btn-info' value="Go to Step 2" style="font-size: 26px;"></form></div>
	
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