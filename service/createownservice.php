<!DOCTYPE html>
<html>
<head>
	<title>Create own service</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="app" ng-controller="ctr">
	<p>
		Here created the own service<p>
			<br/>
	{{pro}}
	<script>
		var app=angular.module("app",[]);
		app.service("hex",function()
		{
			this.fun=function(x){
				return x.toString(16);
			}
			
		});
		app.controller('ctr',function($scope,hex){
			$scope.pro=hex.fun(266);
		});
	</script>

</body>
</html>