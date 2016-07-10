<?php
session_start();
// Add the database connection information
$servername = "mysql.serversfree.com";
$username = "u202176542_test";
$password = "123456";
$dbname = "u202176542_test";

// Declaire textbox values
$user = trim($_POST['username']);
$pass = trim($_POST['password']);
$mail = trim($_POST['email']);
$vpass = trim($_POST['verifypass']);
$cb = trim($_POST['captcha']);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

//Fetching the primary key which is the email
$emailverify = "SELECT email FROM members where email='$mail'";
$result = $conn->query($emailverify);
$row = mysqli_fetch_assoc($result);

//Check if boxes are empty
if(isset($_POST['submit']) && $user=="" || $pass=="" || $mail=="" || $vpass=="" || $cb==""){
echo "Please enter all the boxes";

//Check if the two password boxes matches
} else if ($pass != $vpass) {
	echo "Your password didn't match!!";
	
//Check if the email format is correct
}else if (!filter_var($mail, FILTER_VALIDATE_EMAIL) === true){
	echo "The email you entered is not valid!!";
	
//Check if captcha is correct
} else if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]!=$_POST["captcha"]){
	echo "Wrong Code Entered";
	
//Check if email address already exist in the database
} else if (mysqli_num_rows($result) > 0 ) {
	
	echo "Email Address already been used. Please enter another one.";

//Insert data to the database if the above conditions are met.
} else {
	
	// Create a unique  activation code:
	$activation = md5(uniqid(rand(), true));
	
	$sql = "INSERT INTO members (username, password, email, activation) VALUES ('$user', '$pass', '$mail', '$activation')";
	
	// Check database connection
	if ($conn->query($sql) === TRUE) {
		echo "Your info has been registered. Please activate your account by checking your email address.";
		$to = $mail;
		$subject = "Confirmation Email";
		$header = "from: gizmozine@gmail.com";
		
		$message="Your Comfirmation link: \r\n";
		$message.="Click on this link to activate your account \r\n";
		$message.="http://blogfeed.bugs3.com/confirmation.php?passkey=$activation";
		$sentmail = mail($to,$subject,$message,$header);
		die();
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}




// Close the connection
$conn->close();

?>