var app = angular.module('editor',['ngAnimate','ngSanitize']);


app.controller('articlesFeedController',function($scope, $timeout, $http){
	$http.get('/templates/feed/get.php').success(function(data){
		$scope.articles=data;
	});
});