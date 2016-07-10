<!--SEARCH THE DATABASE UPON TYPING THE KEYWORD ON THE TEXTBOX-->

<?php
include('setup/conn.php');

if(isset($_POST["input"])) {
	$val= $_POST['input'];
	if(!isset($val) || trim($val) == '') {
        echo 'please enter something';
    }else{
        $sql = "SELECT * FROM employee LIMIT $val";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$fname = $row['fname'];
				$lname = $row['lname'];
				$address = $row['address'];
				echo "First Name: $fname | Last Name: $lname | Address: $address <br/>";
			}
		}
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="formCtrl">
  <form novalidate>
    First Name:<br>
    <input type="text" ng-model="input.firstName"><br>
  </form>
  <p>form = {{input }}</p>
</div>

<script>
var app = angular.module('myApp', []);
app.controller('formCtrl', function($scope) {
    $scope.master = {
		firstName:""
	};
});
</script>

</body>
</html>
