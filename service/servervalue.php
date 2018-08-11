<!DOCTYPE html>
<html>
<head>
	<title>Server Response</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="app" ng-controller="ctr">
	<h1>{{note}}</h1>
	
	<script>
		var app=angular.module("app",[]);
		app.controller("ctr",function($scope,$http){
			$http.get("test.htm").then(function(response){
				$scope.note=response.data;
			});
		});
	</script>

</body>
</html>