<!DOCTYPE html>
<html>
<head>
	<title>Control file</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="app" ng-controller="ctr">
	<table border="4|0">
		<tr>
		<th>name</th><th>country</th>
	</tr>
<tr  ng-repeat="x in names">
		<td>{{x.name}}</td><td>{{x.country}}</td>
		<script>
			var app=angular.module("app",[]);
			app.controller("ctr",function($scope){
$scope.names=[
{name:'jon',country:'india'},
{name:'rom',country:'aus'},
{name:'rosy',country:'us'}];
			});
		</script>
</body>
</html>