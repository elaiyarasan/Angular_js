<!DOCTYPE html>
<html>
<head>
	<title>Root scope</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="app">
<p>this is rootScope</p><br/>
<h1>{{color}}</h1>

<div ng-controller="ctr">
<p>this is  controller scope</p><br/>
<h1>{{color}}</h1><br>
</div>

<p>rootscope scopee is still</p><br/>
<h1>{{color}}</h1>

<script>
	var app=angular.module("app",[]);
	app.run(function($rootScope)
	{
$rootScope.color='red';
	});
	app.controller("ctr",function($scope)
	{
$scope.color="blue";
	});
</script>

<p> *controller color can't replace by the rootscope color</p>
</body>
</html>