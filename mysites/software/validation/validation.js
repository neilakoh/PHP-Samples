var validation = {
	removeAllWhiteSpaces: function (str) {
		return str.replace(/\s+/g, '');
	},
	
	removeTrailingAndLeadingWhiteSpaces: function (str) {
		return str.replace(/(^\s+|\s+$)/g,'');
	},
	
	alphaNumericOnly: function (str) {
		var filter = /^[a-z,A-Z,0-9]+$/i;
		return filter.test(str);
	},
	
	usernameChecker: function (input) {
		input = validation.removeAllWhiteSpaces(document.getElementById('username').value);
		var filter = /^[a-z,A-Z,0-9]+$/i;
		console.log(input)
		if(input === "") {
			$(".username_validation").html("<div style='color: red;'>Please enter something</div>");
		} else if(input.length > 12 || input.length < 4) {
			$(".username_validation").html("<div style='color: red;'>Username should be greater than 4 and less than 12</div>"); 
		} else if(!filter.test(input)) {
			$(".username_validation").html("<div style='color: red;'>Please enter Alphanumeric only</div>");
		} else {
			$(".username_validation").html("<div style='color: green;'>Good</div>");
		}
	},
	
	emailChecker: function (input) {
		input = document.getElementById('email').value;
		var filter = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if(filter.test(input) === false) {
			$(".email_validation").html("<div style='color: red;'>E-Mail Address is Invalid</div>");
		} else {
			$(".email_validation").html("<div style='color: green;'>Good</div>");
		}
	},
	
	defaultPasswordChecker: function (input) {
		input = validation.removeAllWhiteSpaces(document.getElementById('password').value);
		var filter = /^[a-z,A-Z,0-9]+$/i;
		
		if(input === "") {
			$(".password_validation").html("<div style='color: red;'>Please enter something</div>");
		}else if(input.length > 12 || input.length < 4) {
			$(".password_validation").html("<div style='color: red;'>Password should be greater than 4 and less than 12</div>");
		}else if(!filter.test(input)) {
			$(".password_validation").html("<div style='color: red;'>Password should be Alphanumeric only</div>");
		} else {
			$(".password_validation").html("<div style='color: green;'>Good</div>");
		}
	},
	
	confirmPasswordChecker: function (pass1, pass2) {
		pass1 = validation.removeAllWhiteSpaces(document.getElementById('password').value);
		pass2 = validation.removeAllWhiteSpaces(document.getElementById('confirm_password').value);
		
		if(pass1 == pass2) {
			$(".confirm_password_validation").html("<div style='color: green;'>Good</div>");
		} else {
			$(".confirm_password_validation").html("<div style='color: red;'>Password not match</div>");
		}
	}
}