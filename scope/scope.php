<!DOCTYPE html>
<html>
<head>
	<title>Scope</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="app" ng-controller="ctr">
	<p>the scope of this expression when calling by the controller<br>
	<h1>{{name}}</h1>
</p>
	<script>
		var app=angular.module("app",[]).controller("ctr",function($scope){
$scope.name="rohit";
		});
	</script>

</body>
</html>