var myapp = angular.module('myapp',['ngRoute','ui.bootstrap']);

//Calling of HTML Files here

myapp.config(function($routeProvider) {
	$routeProvider
	.when('/', {
		templateUrl: 'pages/main.html',
		controller: 'mainpageController'
	})
	
	.when('/page1', {
		templateUrl: 'pages/page1.html', //put here the URL of the page
		controller: 'page1Controller'   // put here the name of the specific controller
	})
	
	.when('/page2', {
		templateUrl: 'pages/page2.html',
		controller: 'page2Controller'
	})
});

//Controllers here

//Controller of main page
myapp.controller('mainpageController', ['$scope','$log', function($scope, $log) {
	
}]);

myapp.controller('page1Controller', ['$scope','$log', function($scope, $log) {
	
}]);

myapp.controller('page2Controller', ['$scope','$log', function($scope, $log) {
	
}]);