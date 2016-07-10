var myapp = angular.module('myapp', ['ui.bootstrap']);

myapp.controller('mainCtrl', function($scope, $http) {
	
    $http.get("http://webtester.acoxi.com/SMPBC/users_sql.php")
	
    .success(function(response) {
		$scope.names = response.records;
	});
});