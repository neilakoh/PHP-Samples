<html>
<title>Tabaching's Blog: Login Page</title>
<head></head>
<body>
<form action="loginprocess.php" method="post">
  <p>
    <label>Username:
      <input type="text" name="username" id="username" value="<?php $user?>">
    </label>
    
  </p>
  <p>
    <label>Password:
      <input type="password" name="password" id="password" value="<?php $pass?>">
    </label>
  </p>
  <p>
    <input type="submit" name="login" id="login" value="Login">
  or <a href="register.php">Register</a></p>
</form>
</body>
</html>