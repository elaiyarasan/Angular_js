<!DOCTYPE html>
<html>
<head>
	<title>Filter the array</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="app" ng-controller="ctr">
	<p>After format change</p>

<ul>
	<li ng-repeat= "x in names">
		{{x|myFormat}}
	</li>
</ul>
<br/>
<p>wihtout format change</p>
<ul>
	<li ng-repeat= "x in names">
		{{x}}
	</li>
</ul>
	<script>
		var app=angular.module('app',[]);
		app.filter('myFormat',function(){
			return function(x)
			{
				var i ,c, txt="";
				for(i=0;i<x.length;i++)
				{
					c=x[i];
					if(i % 2 == 0)
					{
						c=c.toUpperCase();
					}
					txt +=c;
				}
				return txt;
			};

		});


		app.controller('ctr',function($scope){
			$scope.names=[
			'jana','ravikumar','somusundaram','logu','trivendram','salem','dusty'];
		});
	</script>
</body>
</html>