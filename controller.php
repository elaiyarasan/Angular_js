<!DOCTYPE html>
<html>
<head>
	<title>controller Angular js</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
<div ng-app="app" ng-controller="control">
	firstName<input type="text" ng-model="firstname"><br/>
	lastname<input type="text" ng-model="lastname"><br/>
	Number<input type="number" ng-model="number"><br/>
	Full Name   {{firstname+"  "+lastname}}

</div>
<script>
var app=angular.module('app',[]);
app.controller('control',function($scope){
	$scope.firstname="rohit";
	$scope.lastname="sharma";
})

	</script>

</body>
</html>