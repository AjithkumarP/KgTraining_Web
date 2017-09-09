var app = angular.module("myApp", ["ngSanitize"]);

app.controller("myCtrl", function ($scope) {
  $scope.homebtn = function () {
    $scope.target = "<h1>this is about_page";
  };
  $scope.addbtn = function () {
    $scope.target = "<h1>this is to add nwe employee";
  };
  $scope.showlist = function () {
    $scope.target = "<h1>this is to display existing employees";
  };
});
