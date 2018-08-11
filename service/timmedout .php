<!DOCTYPE html>
<html>
<head>
	<title>Timeout</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="app" ng-controller="ctr" bgcolor="{{f}}">
	<p style="color:{{s}};">
	{{head}}</p>
	<br/>
	time function was set this<h1 style="color:red;">
	{{time}}</h1>
<script>
	var app=angular.module("app",[]);
	app.controller("ctr",function($scope,$timeout,$interval)
	{
		$scope.head="hello rohit";
		$timeout(function() {
			$scope.head="we are missing you";
			$scope.f="gray";
			$scope.s="orange";
		}, 1300);
		$scope.time=new Date().toLocaleTimeString();
		$interval(function(){
			$scope.time= new Date().toLocaleTimeString();
		},1000);
	});
</script>
</body>
</html>