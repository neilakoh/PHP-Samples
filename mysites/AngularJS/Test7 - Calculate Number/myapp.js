var myapp = angular.module('myapp',['ui.bootstrap']);

myapp.controller('mainCtrl', ['$scope',mainCtrl]);

function mainCtrl($scope) {
	$scope.quantity = '10';
	$scope.cost = '2.5';
	$scope.total = $scope.cost * $scope.quantity;
}