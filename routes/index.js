var app = angular.module('myApp', ['ngRoute']);
app.config(['$routeProvider', function($routeProvider){
    $routeProvider
    .when('/home',{
        templateUrl: 'views/home.html'
    })
    .when('/directory',{
        templateUrl: 'views/directory.html',
        controller: 'myCtrl',
    }).otherwise({
        redirectTo:'/home'
    })
}]);
app.controller('myCtrl', function($scope) {
  
});