<html>
<title></title>
<head></head>
<body>
<form action="registerprocess.php" method="post">
  <p>
    <label>First Name:
      <input type="text" name="fname" id="fname" value="<?php $fname?>">
    </label>
    
  *</p>
  <p>
    <label>Last Name:
      <input type="text" name="lname" id="lname" value="<?php $lname?>">
    </label>
  *</p>
  <p>
    <label>Email Address:
      <input type="text" name="email" id="email" value="<?php $email?>">
    </label>
  *</p>
  <p>
    <label>Username
      <input type="text" name="reguser" id="reguser" value="<?php $reguser?>">
    </label>
  *</p>
  <p>
    <label>Password:
      <input type="password" name="regpass" id="regpass" value="<?php $regpass?>">
    </label>
  *</p>
  <p>
    <label>Repeat Password:
      <input type="password" name="repeatpass" id="repeatpass" value="<?php $repeatpass?>">
    </label>
  *</p>
  <p>
    <input type="submit" name="register" id="register" value="Register">
  </p>
</form>
</body>
</html>