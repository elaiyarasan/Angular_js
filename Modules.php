<!DOCTYPE html>
<html>
<head>
	<title>Modules in Angular Js</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
<div ng-app="app" ng-controller="myctrl">
<input type="text" ng-model="firstname">
<input type="text" ng-model="lastname">
</div>


<script>
	var app=angular.module("app",[]);
	app.controller("myctrl",function($scope)
	{
		$scope.firstname="jhon";
		$scope.lastname="rose";
	});

</script>
</body>
</html>