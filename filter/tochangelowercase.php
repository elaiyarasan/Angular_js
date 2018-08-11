<!DOCTYPE html>
<html>
<head>
	<title>To change lower case</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
</head>
<body ng-app="app" ng-controller="ctr">
	<p>before changing into lower case <h1>{{lname}}</h1></p><br/>
<p>After changing in to loewer case is <h1>{{lname|lowercase}}</h1></p>
<script>
	angular.module("app",[]).controller('ctr',function($scope){
		$scope.lname="DOE";
	});
</script>
</body>
</html>