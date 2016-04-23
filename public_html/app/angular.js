var app = angular.module('editor',['ngAnimate','ngSanitize']);


app.controller('articlesFeedController',function($scope, $http){
	$http.get('/templates/feed/get.php').success(function(data){
		$scope.articles=data;
	});
});

app.controller('articleWriteController',function($scope, $http, $location){
	var pathname=window.location.pathname;
	$scope.getID=pathname.replace('/blog/','');
	$http.get('/templates/editor/get.php?id='+$scope.getID).success(function(data){
		$scope.article=data;
		if ($scope.article['publish'] == 0) 
		{$scope.article['draft']='Ultima modificacion'; $scope.article['publish']='El articulo es un borrador.';} else
		{$scope.article['draft']='Publicado el'; $scope.article['publish']='El articulo ya esta publicado.';}
		CKEDITOR.instances.editor1.setData($scope.article['content']);
	});


	$scope.saveDraft=function(){
		$scope.encoded = CKEDITOR.instances.editor1.getData().replace(/&/g,"%26");
		var sData = 'id='+$scope.article['id']+
			'&title='+$scope.article['title']+
			'&picture='+$scope.article['picture']+
			'&url='+$scope.article['url']+
			'&author='+$scope.article['author']+
			'&content='+$scope.encoded+
			'&publish='+'0';

		$http.get('/templates/editor/post.php?act=draft&'+sData).success(function(data){
			alert(sData);
			alert(data);
		});
	};

	$scope.savePublish=function(){

	};
});