<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>

<form action="loginprocess.php" method="post">
  <p>
    <label>Username:
      <input type="text" name="username" id="username" value="<?php $user?>"/>
    </label>
    
  </p>
  <p>
    <label>Password:
      <input type="password" name="password" id="password" value="<?php $pass?>"/>
    </label>
  </p>
  <p>
    <input type="submit" name="login" id="login" value="Login" />
  </p>
</form>
</body>
</html>