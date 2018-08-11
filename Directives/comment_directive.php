<!DOCTYPE html>
<html>
<head>
	<title>Comment directive</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="app">
	<!-- directive: w3-test-directive -->

	<script>
		var app=angular.module("app",[]);
		app.directive("w3TestDirective",function(){
			return{
restrict:"M",
replace:true,
template:"<h1>Made a different directory</h1>"
			};
		});
	</script>

</body>
</html>