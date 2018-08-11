<!DOCTYPE html>
<html>
<head>
	<title>Class Directive</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="myApp">
<div class="w3-test-directive"></div>

<script>
var app = angular.module("myApp", []);
app.directive("w3TestDirective", function() {
		return {
        restrict : "C",
        template : "<h1>Made by a directive!</h1>"
    };
	});
	</script>
</body>
</html>