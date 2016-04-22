angular.module('editor', [])
    
    .config(function($routeProvider, $locationProvider) {

        $routeProvider
            .when('/', {
                templateUrl : 'templates/feed/index.html',
                controller : mainController
            })
            .when('/editor', {
                templateUrl : 'templates/editor/index.html',
                controller : mainController
            })
        // use the HTML5 History API
        $locationProvider.html5Mode(true);
    });