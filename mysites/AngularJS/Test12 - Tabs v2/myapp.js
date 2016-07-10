var myapp = angular.module('myapp',['ui.bootstrap']);

myapp.controller('mainCtrl', ['$scope',mainCtrl]);

function mainCtrl($scope) {
	$scope.activities = 'Activities';
	$scope.addactivities = 'Add Activities';
	$scope.files = 'Files';
}