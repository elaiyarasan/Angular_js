<!DOCTYPE html>
<html>
<head>
	<title>Two wway binding</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
<div ng-app="app" ng-controller="ctr">
	<input type="text" ng-model="name">
	<p>{{name}}</p>
</div>
<script>
	var app=angular.module("app",[]);
app.controller("ctr",function($scope){
$scope.name="rohit";
});
</script>
</body>
</html>