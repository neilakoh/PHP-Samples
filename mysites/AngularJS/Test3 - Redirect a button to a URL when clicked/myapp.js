var myapp = angular.module('myapp',['ui.bootstrap']);

myapp.controller('mainCtrl', ['$scope',mainCtrl]);

function mainCtrl($scope) {
	$scope.redirect = function() {
		window.location = "http://www.google.com";
	}
}