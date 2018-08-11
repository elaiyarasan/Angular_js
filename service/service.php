<!DOCTYPE html>
<html>
<head>
	<title>Service</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="app" ng-controller="ctr">
	<p>the Url for this page is<h1>
{{url}}<h1>
	<script>
		var app=angular.module("app",[]);
		app.controller("ctr",function($scope,$location){
			$scope.url=$location.absUrl();
		});
	</script>

</body>
</html>