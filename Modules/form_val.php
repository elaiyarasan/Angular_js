<!DOCTYPE html>
<html>
<head>
	<title>First form Validation</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
<form ng-app="" name="myform">
	number
	<input type="number" name="number" ng-model="number"><span ng-show="myform.number.$error.number">Not a valid number</span>
	<br/>
	mail
	<input type="email" name="myAddress" ng-model="name">
	<span ng-show="myform.myAddress.$error.email">Not a valid Email</span>
	</form> 

</body>
</html>