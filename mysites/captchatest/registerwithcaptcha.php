<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>How to detect if textbox is empty before adding to database</title>
</head>

<body>

<form action="process.php" method="post">
  <p>
    <label>Username:
      <input type="text" name="username" id="username" value="<?php $user?>" />
    </label>
    
  </p>
  <p>
    <label>Password:
      <input type="password" name="password" id="password" value="<?php $pass?>"/>
    </label>
  </p>
  <p>
    <label>Verify Password:
      <input type="text" name="verifypass" id="verifypass" value="<?php $vpass?>" />
    </label>
  </p>
  <p>
    <label>E-Mail:
      <input type="text" name="email" id="email" value="<?php $email?>"/>
    </label>
  </p>
  
  <p><img src="captcha.php" /></p>
  <p><input name="captcha" type="text" value="<?php $captcbaox?>"></p>
  <p>
    <input type="submit" name="Add" id="Add" value="Add Data" />
  </p>
</form>

</body>
</html>