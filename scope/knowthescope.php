<!DOCTYPE html>
<html>
<head>
	<title>Know the scope</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="app" ng-controller="ctr">
	scope for model<input type="text" ng-model="name"> model scope for same element
	<br/>
<p>
	this scope is controlled by the expression<h1>
	{{name}}
</h1>

</p>
<script>
	var app=angular.module("app",[]).controller("ctr",function($scope){
$scope.name="rohit";
	});
</script>
</body>
</html>