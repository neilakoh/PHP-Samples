<?php
$id = trim($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en-US" data-ng-app="myapp">
<head>
<title>Sample Angular JS</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<script type='text/javascript' src='https://code.angularjs.org/1.3.0-rc.1/angular.min.js'></script>
<script src="ui-bootstrap-tpls-0.14.2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet">
<script type='text/javascript' src='myapp.js'></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">

</head>

<body data-ng-controller="mainCtrl" data-ng-init="cmtId('<?php echo $id ?>')">
{{ test }}
	<div data-ng-repeat="c in comment" class="container">
		Comments:<br/>
		<img data-ng-src="{{ c.author.avatar_URL }}"><br/>
		Name: {{ c.author.nice_name }}<br/>
		Topic: {{ c.post.title }}
		Content:<br/>
		<div data-ng-bind-html="c.content | to_trusted"></div><br/>
	</div>

</body>
</html>