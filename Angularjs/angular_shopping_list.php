<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<link rel="stylesheet" href="w3.css">
<body>

<script>
var app = angular.module("myShoppingList", []); 
app.controller("myCtrl", function($scope) {
    $scope.products = ["Milk", "Bread", "Cheese"];
    $scope.addItem = function () {
        $scope.errortext = "";
        if (!$scope.addMe) {return;}
        //矩陣.indexOf($x)回傳在矩陣中出現$x的位置，若$x不在矩陣內則回傳-1
        if ($scope.products.indexOf($scope.addMe) == -1) {
            //js array push的方式加入矩陣
            $scope.products.push($scope.addMe);
        } else {
            $scope.errortext = "The item is already in your shopping list.";
        }
    }
    $scope.removeItem = function (x) {
        $scope.errortext = "";    
        //js使用splice(i,1)來刪除位於矩陣i位置的元素(splice(i,0,"test1","test2"...)為在矩陣位置1依序加入"test1"、"test2"...元素)
        $scope.products.splice(x, 1);
    }
});
</script>

<div ng-app="myShoppingList" ng-cloak ng-controller="myCtrl" class="w3-card-2 w3-margin" style="max-width:400px;">
  <header class="w3-container w3-light-grey w3-padding-16">
    <h3>My Shopping List</h3>
  </header>
  <ul class="w3-ul">
    <!--angular js 中$index可以自動回傳目前的index-->
    <li ng-repeat="x in products" class="w3-padding-16">{{x}}<span ng-click="removeItem($index)" style="cursor:pointer;" class="w3-right w3-margin-right">×</span></li>
  </ul>
  <div class="w3-container w3-light-grey w3-padding-16">
    <div class="w3-row w3-margin-top">
      <div class="w3-col s10">
        <input placeholder="Add shopping items here" ng-model="addMe" class="w3-input w3-border w3-padding">
      </div>
      <div class="w3-col s2">
        <button ng-click="addItem()" class="w3-btn w3-padding w3-green">Add</button>
      </div>
    </div>
    <p class="w3-padding-left w3-text-red">{{errortext}}</p>
  </div>
</div>

</body>
</html>