<!DOCTYPE html>
<html>
<head>
	<title>Element artributes</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="app">
	<l></l>
<script>
	var app=angular.module("app",[]);
	app.directive("l",function(){
return{
	restrict:"E",
	template:"<h1>this is Element Directive</h1>"
}
	});

</script>
</body>
</html>