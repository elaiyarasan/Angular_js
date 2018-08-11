<!DOCTYPE html>
<html>
<head>
	<title>Expreession in Angular</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
<div ng-app="" ng-init="col='green';f=23;po=['ram','seetha','gopi',5];">
<input  style="background-color:{{col}};"ng-model="col">
<input type="number" ng-model="f">
<input type="number" ng-model="l">
<p>{{f+l}}</p>
<p>the second result in the array <br/><span ng-bind="po[0]"></span>
</div>
</body>
</html>