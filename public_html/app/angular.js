var app = angular.module('editor',['ngAnimate','ngSanitize']);


app.controller('articlesFeedController',function($scope, $timeout, $http){
	$http.get('templates/feed/get.php').succes(function(data){
		$scope.artcles=data;
	});
});