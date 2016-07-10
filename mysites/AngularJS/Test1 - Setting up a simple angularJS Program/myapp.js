var myapp = angular.module('myapp',[]);

myapp.controller('mainController', function($scope) {
	$scope.name="Neil";
	
	$scope.getName = function() {
		return 'Te';
	}
	
	$scope.fname = $scope.getName();
	
	console.log($scope);
});