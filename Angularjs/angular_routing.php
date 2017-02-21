<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>

<body ng-app="myApp">

<p><a href="#/">Main</a></p>

<a href="#router_test1">test 1</a>
<a href="#router_test2">test 2</a>
<a href="#router_test3">test 3</a>
<a href="#other1">other 1</a>
<a href="#other2">other 2</a>
<h1>Router test</h1>

<div ng-view>
    
</div>

<script>
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "router_main.php"
    })
    //呈現router_test1.php並用controller增加參數
    .when("/router_test1", {
        templateUrl : "router_test1.php",
        controller : "test1_Ctrl"
    })
    //單純呈現router_test2.php
    .when("/router_test2", {
        templateUrl : "router_test2.php"
    })
    //不呼叫其他檔案而是自己寫CSS
    .when("/router_test3", {
        template: "<h1>test3</h1>"
    })
    //其他選項就用此行
    .otherwise({
        template : "<h1>Nothing</h1><p>Nothing has been selected</p>"
    });
});

<!-- controller {{msg}} 是放在router_test1.php中-->
app.controller("test1_Ctrl", function ($scope) {
    $scope.msg = "test1_controller";
});
</script>

</body>
</html>
