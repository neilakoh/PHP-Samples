<?php
if(isset($_POST["input"])) {
	$val= $_POST['input'];
	if(!isset($val) || trim($val) == '') {
        echo 'please enter something';
    }else{
        echo "You entered: $val";
    }
}
?>

<html>
<title></title>
<head></head>
<body>

<form action="sample2.php" method="post">
<input name="input" type="text" id="input" />
<input name="pass" type="submit" value="Pass Now!"/>
</form>

</body>
</html>