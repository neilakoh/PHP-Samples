var myapp = angular.module('myapp',['ui.bootstrap']);

myapp.controller('mainCtrl', ['$scope',mainCtrl]);

function mainCtrl($scope) {
	$scope.profile = {
		fname: 'neil', 
		lname: 'te'
	}
}