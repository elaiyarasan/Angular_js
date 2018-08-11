<!DOCTYPE html>
<html>
<head>
	<title>css</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<style type="text/css">
		input.ng-invalid{
			background-color: lightblue;
		}
		
		
		input.ng-valid
{
			background-color: orange;
		}
	</style>
</head>
<body>
<form ng-app="" name="myform">
	<input type="text" ng-model="name" placeholder="type only text
" required>
		
	<input type="number" placeholder="type only number" ng-model="number" required>
	<input type="email" ng-model="mail" placeholder="type only mail to valid" required>
	<input type="password" ng-model="password" required>

</form>
</body>
</html>