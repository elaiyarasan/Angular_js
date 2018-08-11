<!DOCTYPE html>
<html>
<head>
	<title>Module and Controller in External File</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	
</head>
<body>
<div ng-app="app" ng-controller="ctr">
	{{firstname + "   " + lastname}}
</div>
<script src="app.js"></script>
	<script src="ctr.js"></script>
</body>
</html>