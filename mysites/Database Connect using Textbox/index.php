<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body,td,th {
	color: #000;
}
.mandatory {
	color: #F00;
}
</style>
</head>
<body text="#000000">

<form action="connect.php" method="post">
  <p>
    <label>Enter Database Username:
      <input type="text" name="dbuser" id="dbuser" value="<?php $dbuser?>" />
    </label>
    
  <span class="mandatory">*</span></p>
  <p>
    <label>Enter Database Password:
      <input type="text" name="dbpass" id="dbpass" value="<?php $dbpass?>"/>
    </label>
  <span class="mandatory">*</span></p>
  <p>
    <label>Enter Database Hostname:
      <input type="text" name="dbhost" id="dbhost" value="<?php $dbhost?>"/>
    </label>
  <span class="mandatory">*</span></p>
  <p>
    <label>Enter Database Name:
      <input type="text" name="dbname" id="dbname" value="<?php $dbname?>"/>
    </label>
  <span class="mandatory">*</span></p>
  <p>
    <input type="submit" name="dbconnect" id="dbconnect" value="Connect Now!" />
  </p>
</form>

</body>
</html>
