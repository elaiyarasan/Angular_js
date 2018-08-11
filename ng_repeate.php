<!DOCTYPE html>
<html>
<head>
	<title>ng-repeate</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
<div ng-app="" ng-init="names=['jan','feb','mar','apr'];pop=[{name:'rose',country:'jose'},{name:'tom',country:'pom'}]">
<p>looping with ng-repeate:</p>
<ul>
	<li ng-repeat="x in names">
		{{x}}
	</li>
</ul>

<p>array of Objects</p>
<ul>
	<li ng-repeat="y in pop">
		{{y.name+', '+y.country}}
	</li>
</ul>
</div>
</body>
</html>