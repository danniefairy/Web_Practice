<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="myCtrl"> 

<input type="text" ng-model="test">



<h1>{{theTime}}</h1>

</div>



<script>
  var app = angular.module('myApp', []);
  app.controller('myCtrl', function($scope, $interval) {
    $scope.theTime = new Date().toLocaleTimeString();
  	$t=0;
    $interval(function () {
    	$x=parseInt($scope.test);
  		if($x>0){
        $t=$x;
        $scope.test="";
      }
      $t=$t+1;
      $scope.theTime = $t;
    }, 1000);
  });
</script>

</body>
</html>
