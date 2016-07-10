<?php
include('setup/conn.php');
include('seo.php');
?>
<!DOCTYPE html>
<html lang="en-US" data-ng-app="myapp">
<head>
<title><?php echo $seositetitle; ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<meta property="og:title" content="<?php echo $seositetitle; ?>"/>
<meta property="og:url" content="<?php echo $seositeurl; ?>"/>
<meta property="og:image" content="<?php echo $seoimgurl; ?>"/>
<meta property="og:description" content="<?php echo $seodescription; ?>"/>

<meta name="og:image" content="<?php echo $seoimgurl; ?>" />
<meta name="og:title" content="<?php echo $seositetitle; ?>" />
<meta name="og:description" content="<?php echo $seodescription; ?>" />
<meta name="og:url" content="<?php echo $seositeurl; ?>" />
<meta property="og:image" content="<?php echo $seoimgurl; ?>" />

<script type='text/javascript' src='angular.min.js'></script>
<script type='text/javascript' src='angular-route.min.js'></script>

<script src="ui-bootstrap-tpls-0.14.2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet">
<script type='text/javascript' src='myapp.js'></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">

</head>

<body>



<div class="container">
	<div data-ng-view></div>
</div>

</body>
</html>