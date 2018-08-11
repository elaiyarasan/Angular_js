<!DOCTYPE html>
<html>
<head>
	<title>Return the value</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="app" ng-controller="ctr">
first name:	<input type="text" ng-model="fname">
last name:	<input type="text" ng-model="lname">
<br/>
full name:{{fullname()}}
<script>
var app=angular.module("app",[]);
app.controller("ctr",function($scope)
{
$scope.fname="mani";
$scope.lname="maran";
$scope.fullname=function(){
	return $scope.fname+" "+$scope.lname;
};
});
</script>
</body>
</html>