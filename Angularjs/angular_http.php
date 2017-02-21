<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="myCtrl"> 

<p>Today's welcome message is:</p>

<h1>{{data}}</h1>
<h3>{{statuscode}}</h3>
<h3>{{statustext}}</h3>
</div>

<p>The $http service requests a page on the server, and the response is set as the value of the "myWelcome" variable.</p>

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
  $http.get("welcome.php").then(function (response) {
      $scope.data= response.data;
      $scope.statuscode = response.status;
      $scope.statustext = response.statusText;  
  });
});
</script>

</body>
</html>
