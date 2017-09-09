var app = angular.module("myApp", []);

<<<<<<< HEAD
app.controller("myCtrl", function ($scope) {
  $scope.homebtn = function () {
    $scope.target = "<h1>this is about_page";
  };
  $scope.addbtn = function () {
    $scope.target = "<h1>this is to add nwe employee";
  };
  $scope.showlist = function () {
    $scope.target = "<h1>this is to display existing employees";
=======
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
>>>>>>> 19ed038814587896b6aba3ed489fb054c8c96a45
  };
});
