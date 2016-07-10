var myapp = angular.module('myapp',['ui.bootstrap']);

myapp.controller('mainCtrl', ['$scope',mainCtrl]);

function mainCtrl($scope) {
	$scope.dashboardtitle = 'Dashboard';
	$scope.profiletitle = 'Profile';
	$scope.scheduletitle = 'Schedule';
	$scope.myemailtitle = 'My Email';
	$scope.myattendancetitle = 'My Attendance';
	$scope.mypayrolltitle = 'My Payroll';
	$scope.mynotestitle = 'My Notes';
}