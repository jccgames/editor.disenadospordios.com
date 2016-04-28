var app = angular.module('editor',['ngAnimate','ngSanitize']);


app.controller('articlesFeedController',function($scope, $http){
	$scope.loading = 1;
	$http.get('/templates/feed/get.php').success(function(data){
		$scope.articles=data;
		$scope.loading = 0;
	});

	$scope.newArticle=function(){
		$http.get('/templates/feed/new.php').success(function(data){
			alert(data);
			window.location = '/'
		})
	};
});

app.controller('articleWriteController',function($scope, $http, $location){
	var pathname=window.location.pathname;
	$scope.getID=pathname.replace('/blog/','');
	$http.get('/templates/editor/get.php?id='+$scope.getID).success(function(data){
		$scope.article=data;
		CKEDITOR.instances.editor1.setData($scope.article['content']);
	});


	$scope.save=function(){
		$scope.article['content'] = CKEDITOR.instances.editor1.getData();
		var data = $.param({
            id: $scope.article['id'],
            title: $scope.article['title'],
            author: $scope.article['author'],
            content: $scope.article['content'],
            picture: $scope.article['picture'],
            url: $scope.article['url']
        });

        var config = {
	        headers : {
	            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
	        }
	    };

		$http.post('/templates/editor/save.php',data, config).success(function(data, status, headers, config){
			alert(data);
		});
	};

	$scope.savePublish=function(){

	};

	$scope.saveDraft=function(){

	};
});