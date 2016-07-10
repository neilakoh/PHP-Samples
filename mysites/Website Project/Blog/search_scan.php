<?php
include('setup/conn.php');
$pterm = trim($_GET['term']);
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

.searchResult {
	background: lightblue none repeat scroll 0 0;
    border-radius: 5px;
    font-size: 16px;
    margin-bottom: 10px;
    padding: 20px;
    position: relative;
    text-align: center;
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

	<div class="col-md-7">
		<div class="searchResult"><b>Search Result Related to:</b> <?php echo $pterm;?></div>
		<?php
		if (isset($_GET["page"])) {
			$page  = $_GET["page"]; 
		} else {
			$page=1; 
		};
		
		$start_from = ($page-1) * 5;
		
		$getpost = "SELECT * FROM posts WHERE post_title LIKE '%$pterm%' ORDER BY date_published DESC LIMIT $start_from, 5";
		$result1 = $conn->query($getpost);

		$countdata = "SELECT COUNT(post_content) FROM posts WHERE post_title LIKE '%$pterm%'";
		$countresult = $conn->query($countdata);
		
		if ($result1->num_rows > 0) {
			while($row = $result1->fetch_assoc()) {
				$postid = $row['post_id'];
				$posttitle =$row['post_title'];
				$posttag =$row['post_tags'];
				$postcontent = $row['post_content'];
				$postpublished =$row['date_published'];
				$postmodified =$row['date_modified'];
				$author = $row['post_author'];
				$thumbnail = $row['post_thumbnail'];
				
				$exploded_tags = explode(",", $posttag);
				
				//READ MORE CODE STARS HERE
				$string = strip_tags($postcontent);
				
				if (strlen($string) > 300) {

					// truncate string
					$stringCut = substr($string, 0, 300);

					// make sure it ends in a word so assassinate doesn't become ass...
					$string = substr($stringCut, 0, strrpos($stringCut, ' '))."... <a href='view_post.php?id=$postid&title=$posttitle' class='tinylinks' style='text-decoration: none; padding-top: 2px; padding-bottom: 2px; padding-left: 5px; padding-right: 5px; background: #005c5c; color:#ffffff; border-radius: 5px;'>Read More</a>"; 
				
				}
				
				$getcomment = "SELECT COUNT(*) as Total FROM comments WHERE post_id = '$postid'";
					$result2 = $conn->query($getcomment);
					$row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
					
					$total_comment = $row2['Total'];
				
				?>
				
				<div class="container" id="blogpost" style="background-color:#E0F1F8; width: 100%; height: auto; padding: 10px; box-shadow: 0 1px 2px 0 #bcbfc0; margin-bottom: 15px;">
					<div class='blogthumbs' style='height: 100%; width:120px; float: left; margin-right: 10px; margin-bottom: 10px;'><img src='images/postthumbnails/<?php echo $thumbnail;?>' height='120px' width='120px' style='float:left;'></div>
					<div class="blogtitle" style="position: relative; top: -25px; font-family: 'Lobster', cursive;"><a href="view_post.php?id=<?php echo $postid; ?>&title=<?php echo $posttitle; ?>" class="posttitlelink" style="text-decoration:none; color:#005c5c;"><h2><?php echo $posttitle; ?></h2></a></div>
					<div class="blogcontent" style="position: relative; top: -15px; text-align: justify;"><?php echo $string; ?>
					<hr />
					<div class="bloginfo" style="position: relative; top: 0px; padding-top:0px;"><span class="icon"><i class="fa fa-user"></i>&nbsp;<b>Author:</b></span> <?php echo $author;?> &nbsp;&nbsp; <span class="icon"><i class="fa fa-calendar"></i>&nbsp;<b>Published on:</b> </span> <?php echo $postpublished;?> &nbsp;&nbsp; <span class="icon"><i class="fa fa-comment"></i>&nbsp;<b>Comments:</b></span> <?php echo $total_comment; ?></div>
					</div>
					<div class="blogcat" style="position: relative; top: 0px; padding-top:0px;"><span class="icon"><i class="fa fa-tags"></i>&nbsp;<b>Category:</b> </span>
					<?php
					foreach( $exploded_tags as $elem ) {
					echo "<a href='tag_display_post.php?id=$elem' class='tinylinks' style='text-decoration: none; padding-top: 2px; padding-bottom: 2px; padding-left: 5px; padding-right: 5px; background: #005c5c; color:#ffffff; border-radius: 5px;'>$elem</a>&nbsp;";
					}
					?>
					</div>
				</div>
				
			<?php
			}
			
			$countrow = mysqli_fetch_row($countresult); 
			$total_records = $countrow[0];
		
			$total_pages = ceil($total_records / 5);
			
			echo "<br /><br />";
			
			echo "<div class='pagelinks'>";
			
			$passid = trim($_GET['page']);
			$nextpage = $passid + 1;
			$backpage = $passid - 1;
			
			if($passid > 1) {
				echo "<a href='search_scan.php?page=".$backpage."&term=$pterm#$backpage' id='".$backpage."'>Previous Page</a> ";
			}
			
			for ($i=1; $i<=$total_pages; $i++) {
				echo "<a href='search_scan.php?page=".$i."&term=$pterm#$i' id='".$i."'>".$i."</a> ";
				$num[] = $i;
				$maxval = count($num);
			};
			
			if($passid > 0 && $passid < $maxval) {
			echo "<a href='search_scan.php?page=".$nextpage."&term=$pterm#$nextpage' id='".$nextpage."'>Next Page</a>";
			}
			
			echo "</div>";
			
		} else {
			echo "<div class='searchResult'><b>Sorry no result found</b></div>";
		}
		?>
	</div>
		
		<!--SIDE BAR STARTS HERE-->
		
		<div class="col-md-3">
			<div class="sidebarcontainer" id="search_post">
				<div class="sidebar_title">Search Post</div>
				<div class="widget">
					<div class="sb" style="position: relative; text-align: center; padding-top: 15px; padding-bottom: 15px; margin-left: -15px;">
						<form action="search.php" method="post">
						<span class="icon"><i class="fa fa-search"></i><input type="search" id="search" name="search" value="<?php $searchresult ?>" style="padding: 10px; border-radius: 5px; border: transparent; width: 250px; padding-left: 45px" placeholder="Search..." /></span>
						</form>
					</div>
				</div>
			</div>
			
			<div class="sidebarcontainer" id="social_media">
				<div class="sidebar_title">Share this page</div>
				<div class="widget" style="padding:10px;">
					<!-- AddToAny BEGIN -->
					<div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="position: relative!important; line-height: 32px; margin-left: 35px!important; margin-right: 35px!important;">
					<a class="a2a_dd" href="https://www.addtoany.com/share_save"></a>
					<a class="a2a_button_facebook"></a>
					<a class="a2a_button_twitter"></a>
					<a class="a2a_button_google_plus"></a>
					<a class="a2a_button_pinterest"></a>
					<a class="a2a_button_tumblr"></a>
					<a class="a2a_button_email"></a>
				</div>
				<script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script>
					<!-- AddToAny END -->
				</div>
			</div>
			
			<div class="sidebarcontainer" id="recent_post">
				<div class="sidebar_title">Recent Posts</div>
				<div class="widget" style="padding:10px; padding-top:20px; font-family: 'Lobster', cursive;">
				
					<?php
					$recenntpost = "SELECT * FROM posts ORDER BY date_published DESC LIMIT 0, 5";
					$drp = $conn->query($recenntpost);
					
						if ($drp->num_rows > 0) {
							while($rp = $drp->fetch_assoc()) {
								$postid =$rp['post_id'];
								$posttitle =$rp['post_title'];
								$pubdate =$rp['date_published'];
								
								echo "<div class='rplink'><a href='view_post_active.php?id=$postid&title=$posttitle'><span class='icon'><i class='fa fa-bullhorn'></i>&nbsp;<b>$posttitle</a></b></span></div><p style='font-size:12px;'>Published on: $pubdate</p>";
							}
						}
					?>
		
				</div>
			</div>
			
			<div class="sidebarcontainer" id="subscribe">
				<div class="sidebar_title">Like us on</div>
				<div class="widget" style="padding:10px; text-align: center;">
					<div class="fb-page" data-href="https://www.facebook.com/pages/963-Medan-FM/347949241950682?fref=ts" data-tabs="timeline" data-width="340" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/963-Medan-FM/347949241950682?fref=ts"><a href="https://www.facebook.com/pages/963-Medan-FM/347949241950682?fref=ts">96.3 Medan FM</a></blockquote></div></div>
					<br/>
					<br/>
					<p><a href="#" class='tinylinks' style="text-decoration: none; padding-top: 2px; padding-bottom: 2px; padding-left: 5px; padding-right: 5px; background: #005c5c; color:#ffffff; border-radius: 5px;">Click here to view our Social Medias</a></p>
				</div>
			</div>
			
		</div>
		
		<!--SIDE BAR ENDS HERE-->
		
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