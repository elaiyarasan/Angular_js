<!DOCTYPE html>
<html>
<head>
	<title>Application status</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
<form ng-app="" name="form" ng-init="name='fres@gmail.com'">
	<input type="email" name="address" ng-model="name" required>
	<p>valid:{{form.address.$valid}}(if true, the value meets criteria).</p>
	<p>Dirty:{{form.address.$dirty}}(if true, the value has been changed).</p>
	<p>Touched:{{form.address.$touched}}(if true, the field has been in focus).</p>
</form>
</body>
</html>