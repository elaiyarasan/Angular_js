<!DOCTYPE html>
<html>
<head>
	<title>Ng click function</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body >
	<div ng-app="app" ng-controller="ctr">
	<p ng-click="changeName()">{{firstname}}<br/>here click this to change the event</p>
</div>
	<script>
		var app=angular.module("app",[]);
		app.controller("ctr",function($scope){
			$scope.firstname="ram";
			$scope.changeName=function(){
				$scope.firstname="rosy";
			}
		});
	</script>
</body>
</html>