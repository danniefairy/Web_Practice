<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<style>
table, th , td  {
  border: 1px solid grey;
  border-collapse: collapse;
  padding: 5px;
}
table tr:nth-child(odd) {
  background-color: #f1f1f1;
}
table tr:nth-child(even) {
  background-color: #ffffff;
}
</style>
<body>

<div ng-app="myApp" ng-controller="customersCtrl"> 

	<ul>
	  <li ng-repeat="x in myData | orderBy:'City'">
	    <span>{{x.Name}}</span>,<span>{{x.City}}</span>,<span>{{x.Country}}</span>
	  </li>
	</ul>

	<table>
		<tr ng-repeat="x in myData  | orderBy:'City'">
		<td>{{$index+1}}</td>
		<td>{{x.Name}}</td>
		<td>{{x.City}}</td>
		<td>{{x.Country}}</td>
		</tr>
	</table>

	<!-- ng-option 可以帶出較多資訊-->
	<select  ng-model="selectedName"  ng-options="x['Name'] for x in myData" value="{{x}}"></select>
	<h1>{{selectedName.City}}</h1>
	<h1>{{selectedName.Country}}</h1>
	<!-- ng-repeat 只可以帶出一個value-->
	<select ng-model="selectedName2">
		<option ng-repeat="x in myData" value="{{x.City}}">
			{{x['Name']}}
		</option>
	</select>
	<h1>{{selectedName2}}</h1>

</div>

<script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
  $http.get("json.php").then(function (response) {
      $scope.myData = response.data;//如果是json.php上面的範例就還要加上.records
  });
});
</script>

</body>
</html>
