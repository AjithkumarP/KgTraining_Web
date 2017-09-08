var app = angular.module("myApp", []);

app.controller("myCtrl", function($scope, $http) {
  $scope.homebtn = function() {
    $http.get("about.txt").then(function(response) {
      $scope.target = response.data;
    });
  };
  $scope.addbtn = function() {
    $http.get("addemp.txt").then(function(response) {
      $scope.target = response.data;
    });
  };
  $scope.showlist = function() {
    $http.get("emplist.txt").then(function(response) {
      $scope.target = response.data;
    });
  };
});
