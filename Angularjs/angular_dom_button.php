<!DOCTYPE html>
<html>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

  <div ng-app="myapp" ng-init="myCheck=false" ng-controller="ctrl">

    <button  ng-click="Check()">Click Me!</button>
    <input type="checkbox" ng-disabled="myCheck"/>Button

  </div> 

<script>
	var app=angular.module('myapp',[]);
    app.controller('ctrl',function($scope){
	$scope.Check=function(){
        $scope.myCheck=!$scope.myCheck;
    }    	
    });
</script>

</body>
</html>

