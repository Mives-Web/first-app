var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.todoList =[
    ];
    
    $scope.addTodo = function (todoAdd) {
      
        if (todoAdd=='' || todoAdd==null || todoAdd==undefined) {
          alert("Please add a new todo");
        }else{
        $scope.keys = Object.keys($scope.todoList).length;
        $scope.todoList.push({id:$scope.keys,adi:$scope.todoAdd});
        $scope.todoAdd = '';
        }
      };
});