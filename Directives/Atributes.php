<!DOCTYPE html>
<html>
<head>
	<title>Atributes Directive</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="app">
<div s></div>
<script>
	var app=angular.module("app",[]);
	app.directive("s",function(){
return{
restrict:"A",
template:"<h1>this is Atributes Directive</h1>"
};
	});

</script>
</body>
</html>