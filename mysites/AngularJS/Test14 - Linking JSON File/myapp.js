var myapp = angular.module('myapp', ['ui.bootstrap']);

myapp.controller('mainCtrl', function($scope, $http) {
   
    $http.get("https://public-api.wordpress.com/rest/v1/freshly-pressed")
   
    .success(function(response) {
        $scope.names = response.posts;
    });
	
	$scope.cmtId = function (id) {
		$scope.cid = id;
	
	$http.get('https://public-api.wordpress.com/rest/v1.1/sites/'+$scope.cid+'/comments/')
	
	.success(function(response) {
		$scope.comment = response.comments;
    });
	}
});

angular.module('myapp')
    .filter('to_trusted', ['$sce', function($sce){
        return function(text) {
            return $sce.trustAsHtml(text);
        };
    }]);
