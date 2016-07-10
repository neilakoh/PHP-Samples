var myapp = angular.module('myapp',['ui.bootstrap']);

myapp.controller('mainCtrl', ['$scope',mainCtrl]);

function mainCtrl($scope) {
	$scope.fname = 'neil';
	$scope.lname = 'te';
}