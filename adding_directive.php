<!DOCTYPE html>
<html>
<head>
	<title>Directive contructor</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
<div ng-app="myapp" a></div>
<script>
var app=angular.module("myapp",[]);
app.directive("a",function(){
	return {
		template:"I was stadying AngularJs"
	};
});

</script>
</body>
</html>