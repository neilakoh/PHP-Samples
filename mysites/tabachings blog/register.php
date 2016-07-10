<html>
<title>Tabaching's Blog: Admin Registration Page</title>
<head>
<!-- Load jQuery from Google's CDN -->
    <!-- Load jQuery UI CSS  -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    
    <!-- Load jQuery JS -->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <!-- Load jQuery UI Main JS  -->
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    
    <!-- Load SCRIPT.JS which will create datepicker for input field  -->
    <script src="script.js"></script>
</head>
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
    <label>Birthdate:
      <input type="text" name="bdate" id="datepicker" value="<?php $bdate?>">
    </label>
  *</p>
  
  <p>
    <label>Username
      <input type="text" name="adminuser" id="adminuser" value="<?php $adminuser?>">
    </label>
  *</p>
  
  <p>
    <label>Password:
      <input type="password" name="adminpass" id="adminpass" value="<?php $adminpass?>">
    </label>
  *</p>
  
  <p>
    <label>Repeat Password:
      <input type="password" name="repeatpass" id="repeatpass" value="<?php $repeatpass?>">
    </label>
  *</p>
  
  <p><img src="captcha.php" /></p>
  <p><input name="captcha" type="text" value="<?php $captcha?>"></p>
  
  <p>
    <input type="submit" name="register" id="register" value="Register">
  </p>
</form>
</body>
</html>