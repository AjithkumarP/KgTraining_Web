angular.module("one", []).controller("one", function($scope) {
  $scope.user = "sai";
});
angular.module("two", []).controller("one", function($scope) {
  $scope.user = "manisha";
});
