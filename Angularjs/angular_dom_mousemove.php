<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>

	<div ng-app="myApp"  ng-controller="myCtrl">
		<!--
			ng-mouseenter
			ng-mouseover
			ng-mousemove
			ng-mouseleave
		-->
		<h1 ng-mousemove="count = count + 1">Mouse Over Me!</h1>

		<h2>{{ count }}</h2>

	</div>

	<script>
	var app = angular.module('myApp', []);
	app.controller('myCtrl', function($scope) {
	    $scope.count = 0;
	});
	</script> 

</body>
</html>